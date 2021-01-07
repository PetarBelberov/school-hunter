<?php
namespace App\DataFixtures;

use App\Entity\Rating;
use App\Entity\University;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class UniversityRatingFixtures extends Fixture
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    public function load(ObjectManager $manager)
    {
        $this->loadLorem($manager);
        $this->loadIpsum($manager);
        $this->loadWhy($manager);
        $this->loadWhere($manager);
    }

    private function loadLorem(ObjectManager $manager) {

        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy (['overall_review' => 'Lorem Ipsum']);

        $university = $this->em
            ->getRepository(University::class)
            ->findOneBy (['slug' => 'nbu']);

        $rating->setUniversity($university);
        $this->save($manager, $rating);
    }

    private function loadIpsum(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Ipsum Lorem']);

        $university = $this->em
            ->getRepository(University::class)
            ->findOneBy (['slug' => 'nbu']);

        $rating->setUniversity($university);
        $this->save($manager, $rating);
    }

    private function loadWhy(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Why do we use it']);

        $university = $this->em
            ->getRepository(University::class)
            ->findOneBy (['slug' => 'unss']);

        $rating->setUniversity($university);
        $this->save($manager, $rating);
    }

    private function loadWhere(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Where does it come from']);

        $university = $this->em
            ->getRepository(University::class)
            ->findOneBy (['slug' => 'unss']);

        $rating->setUniversity($university);
        $this->save($manager, $rating);
    }

    private function save($manager, $rating)
    {
        $manager->persist($rating);
        $manager->flush();
    }
}