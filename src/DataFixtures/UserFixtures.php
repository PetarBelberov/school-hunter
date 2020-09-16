<?php
namespace App\DataFixtures;

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
        foreach ($this->getUserData() as [$firstName, $lastName, $email, $roles, $password, $isVerified]) {
            $user = new User();
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setEmail($email);
            $user->setRoles($roles);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setIsVerified($isVerified);

            $manager->persist($user);
            $this->addReference($email, $user);
        }
        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            // $userData = [$firstName, $lastName, $email, $roles, $password, $isVerified];
            ['Johny', 'Domino', 'johny@gmail.com', ['ROLE_ADMIN'], '123456', true]
        ];
    }
}