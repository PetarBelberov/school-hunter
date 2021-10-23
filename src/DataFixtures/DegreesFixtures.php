<?php
namespace App\DataFixtures;

use App\Entity\Degrees;
use App\Entity\Major;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;

class DegreesFixtures extends Fixture implements OrderedFixtureInterface
{
    public function __construct(EntityManagerInterface $em)
    {
        $this->em =  $em;
    }
    
    public function load(ObjectManager $manager)
    {
        foreach ($this->getDegreeData() as [$name]) {
                $degree = new Degrees();
                $degree->setName($name);
              
                $manager->persist($degree);
                $this->addReference('degree-'.$name, $degree);
            }
            
        $manager->flush();

    }

    private function getDegreeData(): array
    {
        return [
                ['бакалавър'],
                ['магистър'],
                ['доктор']
        ];
    }

     /**
     * Get the order of this fixture
     *
     * @return integer
     */
    function getOrder()
    {
        return 1;
    }
}