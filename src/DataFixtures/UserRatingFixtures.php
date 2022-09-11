<?php

namespace App\DataFixtures;

use App\Entity\Rating;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class UserRatingFixtures extends Fixture
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadJohny1($manager);
        $this->loadUser1($manager);
        $this->loadJohny2($manager);
        $this->loadUser2($manager);
    }

    private function loadJohny1(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Lorem Ipsum']);

        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['email' => 'johny@gmail.com']);

        $rating->setUser($user);
        $this->save($manager, $rating);
    }

    private function loadUser1(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Ipsum Lorem']);

        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['email' => 'user@abv.com']);

        $rating->setUser($user);
        $this->save($manager, $rating);
    }

    private function loadJohny2(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Why do we use it']);

        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['email' => 'johny@gmail.com']);

        $rating->setUser($user);
        $this->save($manager, $rating);
    }

    private function loadUser2(ObjectManager $manager)
    {
        $rating = $this->em
            ->getRepository(Rating::class)
            ->findOneBy(['overall_review' => 'Where does it come from']);

        $user = $this->em
            ->getRepository(User::class)
            ->findOneBy(['email' => 'user@abv.com']);

        $rating->setUser($user);
        $this->save($manager, $rating);
    }

    private function save($manager, $rating)
    {
        $manager->persist($rating);
        $manager->flush();
    }
}
