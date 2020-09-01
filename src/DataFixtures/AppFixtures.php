<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\University;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
        $this->loadUniversities($manager);
    }
    private function loadUsers(ObjectManager $manager): void
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

        // actually executes the queries (i.e. the INSERT query)d
        $manager->flush();
    }
    private function loadUniversities(ObjectManager $manager): void
    {
        foreach ($this->getUniversityData() as [$title, $slug, $description, $address, $phone, $email, $website]) {

            $university = new University();
            $university->setTitle($title);
            $university->setSlug($slug);
            $university->setDescription($description);
            $university->setAddres($address);
            $university->setPhone( $phone);
            $university->setEmail($email);
            $university->setWebsite($website);

            $manager->persist($university);
            $this->addReference($email, $university);
        }
        
        // actually executes the queries (i.e. the INSERT query)d
        $manager->flush();
    }

    private function getUserData(): array
    {
        return [
            // $userData = [$fullname, $username, $password, $email, $roles];
            ['Johny', 'Domino', 'johny@gmail.com', ['ROLE_ADMIN'], '123456', true]
        ];
    }

    private function getUniversityData(): array
    {
        return [
            // $universityData = [$fullname, $username, $password, $email, $roles];
            array(
                'Нов български университет',
                'nbu',
                'Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.',
                'България, гр. София',
                '+359888888888',
                'loremipsum@gmail.nbu.com',
                'https://bg.lipsum.nbu.com/'
            ),
            array(
                'Университет за национално и световно стопанство',
                'unss',
                'Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.',
                'България, гр. София',
                '+359888888888',
                'loremipsum@gmail.unss.com',
                'https://bg.lipsum.com/'
            ),
            array(
                'Софийски университет',
                'su',
                'Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.',
                'България, гр. София',
                '+359888888888',
                'loremipsum@gmail.su.com',
                'https://bg.lipsum.com/'
            ),
            array(
                'Американски колеж',
                'acs',
                'Lorem Ipsum е елементарен примерен текст, използван в печатарската и типографската индустрия. Lorem Ipsum е индустриален стандарт от около 1500 година, когато неизвестен печатар взема няколко печатарски букви и ги разбърква, за да напечата с тях книга с примерни шрифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ipsum.',
                'България, гр. София',
                '+359888888888',
                'loremipsum@gmail.acs.com',
                'https://bg.lipsum.com/'
            )
        ];
    }
}
