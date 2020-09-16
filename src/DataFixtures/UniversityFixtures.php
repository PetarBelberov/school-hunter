<?php
namespace App\DataFixtures;


use App\Entity\University;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UniversityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
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
        }
        $manager->flush();
    }

    private function getUniversityData(): array
    {
        return [
            // $universityData = [$title, $slug, $description, $address, $phone, $email, $website];
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