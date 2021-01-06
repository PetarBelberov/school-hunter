<?php
namespace App\DataFixtures;

use App\Entity\Rating;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class RatingFixtures extends Fixture
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function load(ObjectManager $manager)
    {
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
            $rating = new Rating();
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
        $manager->flush();
    }

    private function getRatingData(): array
    {
        return [
            // $ratingData = [$university, $campus, $academics, $location, $teachingQuality, $jobProspects, $professors, $athletics, $food, $dorms, $overall_rating, $overall_review];
            [1, 2, 3, 4, 5, 4, 3, 2, 1, 5, 'Lorem Ipsum'],
            [5, 4, 3, 2, 1, 1, 2, 3, 4, 1, 'Ipsum Lorem']
        ];
    }
}