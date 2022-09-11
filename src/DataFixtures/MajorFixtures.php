<?php

namespace App\DataFixtures;

use App\Entity\Major;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MajorFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $degrees_arr = ['бакалавър', 'магистър', 'доктор'];
        foreach ($this->getMajorData() as [$name]) {
            $major = new Major();
            $major->setName($name);

            foreach ($degrees_arr as $degree) {
                $major->addDegree($this->getReference('degree-'.$degree));
            }

            $manager->persist($major);
        }
        $manager->flush();
    }

    private function getMajorData(): array
    {
        return [
                ['Администрация и управление'],
                ['Икономика'],
                ['История и археология'],
                ['Обществени комуникации и информационни науки'],
                ['Политически науки'],
                ['Право'],
                ['Социология, антропология и науки за културата'],
                ['Архитектура, строителство и геодезия'],
                ['Биологически науки'],
                ['Информатика и компютърни науки'],
                ['Комуникационна и компютърна техника'],
                ['Музикално и танцово изкуство'],
                ['Науки за земята'],
                ['Национална сигурност'],
                ['Обществено здраве'],
                ['Социални дейности'],
                ['Театрално и филмово изкуство'],
                ['Теория на изкуствата'],
                ['Туризъм'],
                ['Филология'],
                ['Биотехнологии'],
                ['Електротехника, електроника и автоматика'],
                ['Здравни грижи'],
                ['Изобразително изкуство'],
                ['Математика'],
                ['Медицина'],
                ['Педагогика'],
                ['Педагогика на обучението'],
                ['Психология'],
                ['Религия и теология'],
                ['Теория и управление на образованието'],
                ['Фармация'],
                ['Физически науки'],
                ['Философия'],
                ['Химически науки'],
        ];
    }

    /**
     * Get the order of this fixture.
     *
     * @return int
     */
    public function getOrder()
    {
        return 2;
    }
}
