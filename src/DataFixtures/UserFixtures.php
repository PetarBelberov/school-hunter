<?php
namespace App\DataFixtures;

use App\Entity\Rating;
use App\Entity\User;
use App\Entity\University;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        foreach ($this->getUserData() as [$firstName, $lastName, $email, $roles, $password, $isVerified]) {

            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setEmail($email);
            $user->setRoles($roles);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setIsVerified($isVerified);

            $manager->persist($user);
        }
        $user->setRating($this->getReference(RatingFixtures::RATING_REFERENCE));
        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            // $userData = [$firstName, $lastName, $email, $roles, $password, $isVerified];
            ['Johny', 'Domino', 'johny@gmail.com', ['ROLE_ADMIN'], '123456', true],
            ['User', 'Userov', 'user@abv.com', ['ROLE_USER'], '123456', true]
        ];
    }
}