<?php
namespace App\DataFixtures;

use App\Entity\Major;
use App\Entity\University;
use App\Entity\UniversityMajor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use ErrorException;
use Exception;

class UniversityMajorFixtures extends Fixture implements OrderedFixtureInterface
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =  $em;
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUNSS($manager);
        $this->loadNBU($manager);
        $this->loadSU($manager);
        $this->loadACS($manager);
    }

    public function checkMajors($major_name, $ranking) {
        $major = $this->em
            ->getRepository(Major::class)
            ->findBy(['name' => $major_name]);

        $uni_majors = $this->em
            ->getRepository(UniversityMajor::class)
            ->findBy(['rsvu_ranking' => $ranking, 'major' => $major]);

        return $uni_majors;
    }

    public function throwException($ranking, $major, $manager, $university, $university_major) {
        if(empty($this->checkMajors($major->getName(), $ranking)))
        {
            $this->save($manager, $ranking, $major, $university, $university_major);
        }
        else 
        {
            throw new Exception('Existing ranking (' . $ranking . ') for the major: ' . $major->getName());
        }
    }
    
    public function loadUNSS($manager)
    {
        $university = $this->em
            ->getRepository(University::class)
            ->findBy(['title' => 'Университет за национално и световно стопанство']);

        $majors = $this->em
            ->getRepository(Major::class)
            ->findAll();

        foreach ($majors as $major) {
            $university_major = new UniversityMajor();
            
            if ($major->getName() == 'Администрация и управление') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Икономика') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'История и археология') {
                $ranking = 8;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществени комуникации и информационни науки') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Политически науки') {
                $ranking = 13;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Право') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Социология, антропология и науки за културата') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
        }
    }

    public function loadNBU($manager)
    {
        $university = $this->em
            ->getRepository(University::class)
            ->findBy(['title' => 'Нов български университет']);

        $majors = $this->em
            ->getRepository(Major::class)
            ->findAll();

        foreach ($majors as $major) {
            $university_major = new UniversityMajor();

            if ($major->getName() == 'Администрация и управление') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Архитектура, строителство и геодезия') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Биологически науки') {
                $ranking = 13;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Икономика') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Информатика и компютърни науки') {
                $ranking = 8;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'История и археология') {
                $ranking = 7;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Комуникационна и компютърна техника') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Музикално и танцово изкуство') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Науки за земята') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Национална сигурност') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществени комуникации и информационни науки') {
                $ranking = 7;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществено здраве') {
                $ranking = 12;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Политически науки') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Право') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Психология') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Социални дейности') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Социология, антропология и науки за културата') {
                $ranking = 6;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Театрално и филмово изкуство') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Теория на изкуствата') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Туризъм') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Филология') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
        }
    }

    public function loadSU($manager)
    {
        $university = $this->em
            ->getRepository(University::class)
            ->findBy(['title' => 'Софийски университет']);

        $majors = $this->em
            ->getRepository(Major::class)
            ->findAll();

        foreach ($majors as $major) {
            $university_major = new UniversityMajor();

            if ($major->getName() == 'Администрация и управление') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Икономика') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Биологически науки') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Биотехнологии') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Електротехника, електроника и автоматика') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Здравни грижи') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Изобразително изкуство') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Информатика и компютърни науки') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'История и археология') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Комуникационна и компютърна техника') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Математика') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Медицина') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Музикално и танцово изкуство') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Науки за земята') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществени комуникации и информационни науки') {
                $ranking = 8;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществено здраве') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Педагогика') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Педагогика на обучението') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Политически науки') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Право') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Психология') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Религия и теология') {
                $ranking = 8;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Социални дейности') {
                $ranking = 6;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Социология, антропология и науки за културата') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Теория и управление на образованието') {
                $ranking = 6;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Туризъм') {
                $ranking = 2;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Фармация') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Физически науки') {
                $ranking = 7;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Филология') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Философия') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Химически науки') {
                $ranking = 7;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
        }
    }

    public function loadACS($manager)
    {
        $university = $this->em
            ->getRepository(University::class)
            ->findBy(['title' => 'Американски колеж']);

        $majors = $this->em
            ->getRepository(Major::class)
            ->findAll();

        foreach ($majors as $major) {
            $university_major = new UniversityMajor();

            if ($major->getName() == 'Администрация и управление') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Икономика') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Информатика и компютърни науки') {
                $ranking = 4;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'История и археология') {
                $ranking = 5;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Математика') {
                $ranking = 3;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Обществени комуникации и информационни науки') {
                $ranking = 10;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
            if ($major->getName() == 'Политически науки') {
                $ranking = 1;
                $this->checkMajors($major->getName(), $ranking);
                $this->throwException($ranking, $major, $manager, $university, $university_major);
            }
        }
    }

    private function save($manager, $ranking, $major, $university, $university_major)
    {
        $university_major->setUniversity($university[0]);
        $university_major->setMajor($major);
        $university_major->setRSVURanking($ranking);

        $manager->persist($university_major);
        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 3;
    }
}