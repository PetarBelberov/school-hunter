<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Comment;
use App\Entity\Degrees;
use App\Events\CommentCreatedEvent;
use App\Form\CommentType;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\University;
use App\Entity\Major;
use App\Entity\UniversityMajor;
use App\Entity\User;
use Doctrine\ORM\Mapping\Id;
use Exception;
use SessionHandler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Contracts\Cache\ItemInterface;
use Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
    * @Route("/universities", name="university_")
    */
class UniversityController extends AbstractController
{

    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @Route("/", name="index")
     */
    public function index()
    {

        return $this->render('university/index.html.twig', [
            'controller_name' => 'UniversityController',
            'universities' => $this->fetchUniversities(),
        ]);
    }

    public function fetchUniversities() {

        // Caching the request and the response
        $store = new Store('src/Controller');
        $this->client = HttpClient::create();
        $this->client = new CachingHttpClient($this->client, $store);

        // Handle network errors and outdated or wrong API
        try {
            // Fetch the universities API and getting the data
            $universitiesResponse = $this->client->request(
                'GET',
                'https://rsvu.mon.bg/rsvu4/rest/universities/bg?v=1659787975114'
            );

        // Handle the exception and get the data from the DB
        } catch (TransportExceptionInterface $e) {
            $universities = array();
            $fetchUniversities = $this->getDoctrine()->getManager()
                ->getRepository(University::class)
                ->findAll();

            foreach ($fetchUniversities as $university) {
                array_push($universities, $university);
            }
            return $universities;
        }

        if (!empty($universitiesResponse)) {
            $universities = array();

            $content['universities'] = $universitiesResponse->getContent();
            $content['universities'] = $universitiesResponse->toArray();

            // Fetch by the domain name from the website with Regex.
            $regex = '/(?:https?:\/\/)?(?:www\.)?(.*)\.(?=[\w.]{2,4})/';

            foreach ($content['universities'] as $universityArr) {
                if ($universityArr['uniParentId'] == null && $universityArr['uniCode'] != '9999') {

                    $university['title'] = $universityArr['name'];
                    $university['address'] = $universityArr['city'] . ', ' . $universityArr['poAddress'];
                    $university['phone'] = $universityArr['telephone'];
                    $university['email'] = $universityArr['email'];
                    $university['website'] = $universityArr['webAddress'];

                    preg_match_all($regex, $university['website'], $slugArr, PREG_SET_ORDER, 0);

                    foreach ($slugArr as $slug) {
                        $university['slug'] = strtolower($slug[1]);

                    }
                    array_push($universities, $university);
                }
            }
        }
//        $this->createUniversities($universities);
        return $universities;
    }

    public function createUniversities($universities) {
        $entityManager = $this->getDoctrine()->getManager();
        foreach ($universities as $university) {

            // checks if the record exist
            $checkUniversity = $entityManager->getRepository(University::class)->findBy( ['slug' => $university['slug']],);

            if (empty($checkUniversity)) {
                $universityEntity = new University();
                $universityEntity->setTitle($university['title']);
                $universityEntity->setSlug($university['slug']);
                $universityEntity->setDescription($university['title']);
                $universityEntity->setAddres($university['address']);
                $universityEntity->setPhone($university['phone']);
                $universityEntity->setEmail($university['email']);
                $universityEntity->setWebsite($university['website']);

                $entityManager->remove($universityEntity);
                $entityManager->persist($universityEntity);
            }
        }
        $entityManager->flush();
    }

    private function getUniversitiesData(): array
    {
        $universities = $this->fetchUniversities();
        $universitiesArr = array();
        foreach ($universities as $university) {
            foreach ($university as $uni) {
                array_push($universitiesArr, $uni['title']);
            }
        }

        return [
            $universitiesArr
        ];
    }

    public function fetchMajors($api, $university) {
        // Caching the request and the response
        $store = new Store('src/Controller');
        $this->client = HttpClient::create();
        $this->client = new CachingHttpClient($this->client, $store);
//        $majors = array();

        // Handle network errors and outdated or wrong API
        try {
            // Fetch the universities API and getting the data
            $majorsResponse = $this->client->request(
                'GET',
                $api
            );

            // Handle the exception and get the data from the DB
        } catch (TransportExceptionInterface $e) {
            $majors = array();

            $fetchMajors = $this->getDoctrine()->getManager()
                ->getRepository(UniversityMajor::class)
                ->findBy(['university' => $university]);

            foreach ($fetchMajors as $major) {
                array_push($majors, $major->getMajor());
            }
            return $majors;
        }

        if (!empty($majorsResponse)) {
            $majors = array();


            $content['majors'] = $majorsResponse->getContent();
            $content['majors'] = $majorsResponse->toArray();

            foreach ($content['majors'] as $majorArr) {
                if (!empty($majorArr['name'])) {
                    $major['name'] = $majorArr['name'];
                    array_push($majors, $major);
                }
            }
        }

//        $this->createMajors($majors);
        return $majors;
    }

    public function createMajors($majors) {
        $entityManager = $this->getDoctrine()->getManager();

        foreach ($majors as $major) {
            foreach ($major as $name) {

                // checks if the record exist
                $checkMajor = $entityManager->getRepository(Major::class)->findBy( ['name' => $name],);
                if (!$checkMajor) {
                    $major = new Major();
                    $major->setName($name);
                    $entityManager->persist($major);
                }
            }
        }
        $entityManager->flush();
    }

    private function getMajorsData(): array
    {
        $majors = $this->fetchMajors();
        $majors_arr = array();
        foreach ($majors as $major) {
            foreach ($major as $m) {
                array_push($majors_arr, $m['name']);
            }
        }

        return [
            $majors_arr
        ];
    }

    public function fetchDegrees()
    {
        $store = new Store('src/Controller');
        $this->client = HttpClient::create();
        $this->client = new CachingHttpClient($this->client, $store);

        // Bachelors
        $response_2588_bachelors = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2588/6/bg?v=1631382508381'
        );
        
        $response_2592_bachelors = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/6/bg?v=1631382508381'
        );
        $response_2531_bachelors = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2531/6/bg?v=1631382508381'
        );

        // Masters
        $response_2588_masters = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2588/7/bg?v=1631382508381'
        );
        $response_2592_masters = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/7/bg?v=1631382508381'
        );
        $response_2531_masters = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2531/7/bg?v=1631382508381'
        );

         // PhD
         $response_2588_phd = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2588/8/bg?v=1631382508381'
        );
         $response_2592_phd = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/8/bg?v=1631382508381'
        );
        $response_2531_phd = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2531/8/bg?v=1631382508381'
        );
        
        
        // Administration and Management
        if (isset($response_2588_bachelors)) {
            $content['2588_bachelors'] = $response_2588_bachelors->getContent();
            $content['2588_bachelors'] = $response_2588_bachelors->toArray();
        }
        if (isset($response_2588_masters)) {
            $content['2588_masters'] = $response_2588_masters->getContent();
            $content['2588_masters'] = $response_2588_masters->toArray();
        }
        if (isset($response_2588_phd)) {
            $content['2588_phd'] = $response_2588_phd->getContent();
            $content['2588_phd'] = $response_2588_phd->toArray();
        }

        // Economics
        if (isset($response_2592_bachelors)) {
            $content['2592_bachelors'] = $response_2592_bachelors->getContent();
            $content['2592_bachelors'] = $response_2592_bachelors->toArray();
        }
        if (isset($response_2592_masters)) {
            $content['2592_masters'] = $response_2592_masters->getContent();
            $content['2592_masters'] = $response_2592_masters->toArray();
        }
        if (isset($response_2592_phd)) {
            $content['2592_phd'] = $response_2592_phd->getContent();
            $content['2592_phd'] = $response_2592_phd->toArray();
        }

         // Economics
         if (isset($response_2531_bachelors)) {
            $content['2531_bachelors'] = $response_2531_bachelors->getContent();
            $content['2531_bachelors'] = $response_2531_bachelors->toArray();
        }
        if (isset($response_2531_masters)) {
            $content['2531_masters'] = $response_2531_masters->getContent();
            $content['2531_masters'] = $response_2531_masters->toArray();
        }
        if (isset($response_2531_phd)) {
            $content['2531_phd'] = $response_2531_phd->getContent();
            $content['2531_phd'] = $response_2531_phd->toArray();
        }
        
        return $content;
    }


    public function createDegrees() {
        $entityManager = $this->getDoctrine()->getManager();
        
        foreach ($this->getDegreeData() as [$name]) {
            // checks if the record exist
            $checkDegree = $entityManager->getRepository(Degrees::class)->findBy( ['name' => $name],);
            if (!$checkDegree) {
                $degree = new Degrees();
                $degree->setName($name);
                $entityManager->persist($degree);
            }
        }
        $entityManager->flush();
    }

    private function getDegreeData(): array
    {
        return [
                ['бакалавър'],
                ['магистър'],
                ['доктор']
        ];
    }

    public function checkMajors($major_name, $ranking) {
        $major = $this->em
            ->getRepository(Major::class)
            ->findBy(['name' => $major_name]);

        $uni_majors = $this->em
            ->getRepository(UniversityMajor::class)
            ->findBy(['rsvu_ranking' => $ranking, 'major' => $major]);

        return $uni_majors;
    }
    
    /**
     * @Route("/{slug}", name="show")
     */
    public function show(University $university): Response
    {
        if($university->getSlug() == 'unwe') $majors = $this->fetchMajors('https://rsvu.mon.bg/rsvu4/rest/major/98/bg?v=1660247307955', $university);


        $bachelors = $this->getDoctrine()
            ->getRepository(Degrees::class)
            // ->findBy(['majors' => $majors]);
            ->findBy(['name' => 'бакалавър']);

        $masters = $this->getDoctrine()
            ->getRepository(Degrees::class)
            // ->findBy(['majors' => $majors]);
            ->findBy(['name' => 'магистър']);

        $doctors = $this->getDoctrine()
            ->getRepository(Degrees::class)
            // ->findBy(['majors' => $majors]);
            ->findBy(['name' => 'доктор']);
            
        $ratings = $this->getDoctrine()
            ->getRepository(Rating::class)
            ->findBy(['university' => $university]);

//        $this->createDegrees();
//        $this->createMajors();

        return $this->render('university/show.html.twig',
            array(
                'university' => $university,
                'majors' => $majors,
                'sum_ratings' => $this->sumRatings($university),
                'ratings' => $ratings,
                 'degrees' => $this->getDegreeData(),
                'bachelors' => $bachelors,
                'masters' => $masters,
                'doctors' => $doctors
            )
        );
    }

    private function sumRatings($university)
    {
        // Average grades
        $ratings = $this->getDoctrine()
            ->getRepository(Rating::class)
            ->findBy(['university' => $university]);

        $sum_rating['campus'] = array();
        $sum_rating['academics'] = array();
        $sum_rating['location'] = array();
        $sum_rating['teachingQuality'] = array();
        $sum_rating['jobProspects'] = array();
        $sum_rating['professors'] = array();
        $sum_rating['athletics'] = array();
        $sum_rating['food'] = array();
        $sum_rating['dorms'] = array();
        $sum_rating['overall_rating'] = array();
        $sum_rating['overall_reviews'] = array();

        $sum_campus_rating = 0;
        $sum_academics_rating = 0;
        $sum_location_rating = 0;
        $sum_teachingQuality_rating = 0;
        $sum_jobProspects_rating = 0;
        $sum_professors_rating = 0;
        $sum_athletics_rating = 0;
        $sum_food_rating = 0;
        $sum_dorms_rating = 0;
        $sum_overall_rating = 0;

        foreach ($ratings as $rating)
        {
            $sum_campus_rating = ($sum_campus_rating + $rating->getCampus());
            $sum_academics_rating = ($sum_academics_rating + $rating->getAcademics());
            $sum_location_rating = ($sum_academics_rating + $rating->getLocation());
            $sum_teachingQuality_rating = ($sum_teachingQuality_rating + $rating->getTeachingQuality());
            $sum_jobProspects_rating = ($sum_jobProspects_rating + $rating->getJobProspects());
            $sum_professors_rating = ($sum_professors_rating + $rating->getProfessors());
            $sum_athletics_rating = ($sum_athletics_rating + $rating->getAthletics());
            $sum_food_rating = ($sum_food_rating + $rating->getFood());
            $sum_dorms_rating = ($sum_dorms_rating + $rating->getDorms());
            $sum_overall_rating = ($sum_overall_rating + $rating->getOverallRating());
            array_push($sum_rating['overall_reviews'], $rating->getOverallReview());
        }
        $sum_campus_rating = $sum_campus_rating / sizeof($ratings);
        $sum_academics_rating = $sum_academics_rating / sizeof($ratings);
        $sum_location_rating = $sum_location_rating / sizeof($ratings);
        $sum_teachingQuality_rating = $sum_teachingQuality_rating / sizeof($ratings);
        $sum_jobProspects_rating = $sum_jobProspects_rating / sizeof($ratings);
        $sum_professors_rating = $sum_professors_rating / sizeof($ratings);
        $sum_athletics_rating = $sum_athletics_rating / sizeof($ratings);
        $sum_food_rating = $sum_food_rating / sizeof($ratings);
        $sum_overall_rating = $sum_overall_rating / sizeof($ratings);
        $sum_dorms_rating = $sum_dorms_rating / sizeof($ratings);

        array_push($sum_rating['campus'], $sum_campus_rating);
        array_push($sum_rating['academics'], $sum_academics_rating);
        array_push($sum_rating['location'], $sum_location_rating);
        array_push($sum_rating['teachingQuality'], $sum_teachingQuality_rating);
        array_push($sum_rating['jobProspects'], $sum_jobProspects_rating);
        array_push($sum_rating['professors'], $sum_professors_rating);
        array_push($sum_rating['athletics'], $sum_athletics_rating);
        array_push($sum_rating['food'], $sum_food_rating);
        array_push($sum_rating['dorms'], $sum_dorms_rating);
        array_push($sum_rating['overall_rating'], $sum_overall_rating);

        return $sum_rating;
    }

    /**
     * @Route("/comment/{universitySlug}/new", methods="POST", name="comment_new")
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * @ParamConverter("university", options={"mapping": {"universitySlug": "slug"}})
     *
     */
    public function commentNew(Request $request, University $university, EventDispatcherInterface $eventDispatcher): Response
    {
        $rating = new Rating();
        $rating->setUser($this->getUser());
        $university->addRating($rating);
       
        $is_exist = $this->getDoctrine()
        ->getRepository(Rating::class)
        ->findOneBy(['university' => $university]);

        $form = $this->createForm(CommentType::class, $rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if(!isset($is_exist)) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($rating);
                $em->flush();    

                $eventDispatcher->dispatch(new CommentCreatedEvent($rating));

                return $this->redirectToRoute('university_index', ['slug' => $university->getSlug()]);
            }
        }

        return $this->render('error404.html.twig', [
            'rating' => $rating,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/add_review", name="add_review")
     */
    public function addReview(University $university) {
        $form = $this->createForm(CommentType::class);
        
        return $this->render('university/_comment_form.html.twig', [
            'university' => $university,
            'form' => $form->createView(),
        ]);
    }
}
