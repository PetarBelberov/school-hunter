<?php
namespace App\DataFixtures;

use App\Entity\Major;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class DegreeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getDegreeData() as [$name]) {
                $degree = new Major();
                $degree->setName($name);
                $manager->persist($degree);
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
}