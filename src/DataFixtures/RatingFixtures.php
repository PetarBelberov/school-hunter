<?php
namespace App\DataFixtures;

use App\Entity\Rating;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

class RatingFixtures extends Fixture
{
    public const RATING_REFERENCE = 'rating';

    public function __construct(EntityManagerInterface $em, LoggerInterface $logger)
    {
        $this->em = $em;
        $this->logger = $logger;
    }
    public function load(ObjectManager $manager)
    {
        $rating = new Rating();

        foreach ($this->getRatingData() as [
                 $campus,
                 $academics,
                 $location,
                 $teachingQuality,
                 $jobProspects,
                 $professors,
                 $athletics,
                 $food,
                 $dorms,
                 $overall_rating,
                 $overall_review,
        ]) {

            $rating->setCampus($campus);
            $rating->setAcademics($academics);
            $rating->setLocation($location);
            $rating->setTeachingQuality($teachingQuality);
            $rating->setJobProspects($jobProspects);
            $rating->setProfessors($professors);
            $rating->setAthletics($athletics);
            $rating->setFood($food);
            $rating->setDorms($dorms);
            $rating->setOverallRating($overall_rating);
            $rating->setOverallReview($overall_review);

            $manager->persist($rating);
        }
        $this->addReference(self::RATING_REFERENCE, $rating);
        $manager->flush();
    }

    private function getRatingData(): array
    {
        return [
            // $ratingData = [$university, $campus, $academics, $location, $teachingQuality, $jobProspects, $professors, $athletics, $food, $dorms, $overall_rating, $overall_review];
            [1, 2, 3, 4, 5, 4, 3, 2, 1, 5, 'Lorem Ipsum']
        ];
    }
}