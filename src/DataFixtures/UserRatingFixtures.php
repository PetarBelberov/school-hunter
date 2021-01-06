<?php
namespace App\DataFixtures;

use App\Entity\Rating;
use App\Entity\User;
use App\Entity\UserRating;
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
        $user_emails = ['johny@gmail.com', 'user@abv.com'];
        foreach ($user_emails as $user_email) {
            $this->loadJohny($user_email);

        $ratings = $this->em
            ->getRepository(Rating::class)
            ->findAll();
        $user_rating = new UserRating();

            foreach ($ratings as $rating) {
                $this->save($rating, $manager, $this->loadJohny($user_email), $user_rating);
            }
        }
    }

    private function loadJohny($user_email)
    {
        $users = $this->em
            ->getRepository(User::class)
            ->findBy(['email' => $user_email]);

        foreach ($users as $user) {
            return $user;
        }
    }

    private function save($rating, $manager, $user, $user_rating)
    {
        $user_rating->setUser($user);
        $user_rating->setRating($rating);

        $manager->persist($user_rating);
        $manager->flush();
    }
}