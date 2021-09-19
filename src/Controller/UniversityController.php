<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Comment;
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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpClient\HttpClient;

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
        ]);
    }

    public function fetchDegree(): array
    {
        // Bachelors
        $response_economics_bachelors = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/6/bg?v=1631382508381'
        );

        // Masters
        $response_economics_masters = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/7/bg?v=1631382508381'
        );

         // Doctor
         $response_economics_phd = $this->client->request(
            'GET',
            'https://rsvu.mon.bg/rsvu4/rest/universities/minors/107/2592/8/bg?v=1631382508381'
        );
        
        if (isset($response_economics_bachelors)) {
            $content['economics_bachelors'] = $response_economics_bachelors->getContent();
            $content['economics_bachelors'] = $response_economics_bachelors->toArray();
        }
        if (isset($response_economics_masters)) {
            $content['economics_masters'] = $response_economics_masters->getContent();
            $content['economics_masters'] = $response_economics_masters->toArray();
        }
        if (isset($response_economics_phd)) {
            $content['economics_phd'] = $response_economics_phd->getContent();
            $content['economics_phd'] = $response_economics_phd->toArray();
        }
        
        return $content;
    }


    /**
     * @Route("/{slug}", name="show")
     */
    public function show(University $university): Response
    {
        $majors = array();
        $university_majors = $this->getDoctrine()
        ->getRepository(UniversityMajor::class)
        ->findBy(['university' => $university]);

        $ratings = $this->getDoctrine()
        ->getRepository(Rating::class)
        ->findBy(['university' => $university]);

        $counter = 0;
        foreach ($university_majors as $university_major) {
            array_push($majors, array($counter => $university_major->getMajor()->getName(), $university_major->getRSVURanking()));
            $counter++;
        }

        return $this->render('university/show.html.twig',
            array(
                'university' => $university,
                'majors' => $majors,
                'sum_ratings' => $this->sumRatings($university),
                'ratings' => $ratings,
                'degrees' => $this->fetchDegree()
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
