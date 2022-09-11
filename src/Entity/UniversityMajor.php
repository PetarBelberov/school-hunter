<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="university_major")
 */
class UniversityMajor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="University", inversedBy="universityMajor", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $university;

    /**
     * @ORM\ManyToOne(targetEntity="Major", inversedBy="universityMajor", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $major;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private $rsvu_ranking;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function geUniversity()
    {
        return $this->university;
    }

    public function setUniversity($university): void
    {
        $this->university = $university;
    }

    public function getMajor()
    {
        return $this->major;
    }

    public function setMajor($major): void
    {
        $this->major = $major;
    }

    public function getRSVURanking(): ?int
    {
        return $this->rsvu_ranking;
    }

    public function setRSVURanking(string $rsvu_ranking): void
    {
        $this->rsvu_ranking = $rsvu_ranking;
    }

    public function getUniversity(): ?University
    {
        return $this->university;
    }
}
