<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Rating
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\NotBlank
     */
    private $campus;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\NotBlank
     */
    private $academics;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $location;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\NotBlank
     */
    private $teachingQuality;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $jobProspects;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\NotBlank
     */
    private $professors;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $athletics;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $food;

    /**
     * @ORM\Column(type="integer", length=255)
     */
    private $dorms;

    /**
     * @ORM\Column(type="integer", length=255)
     * @Assert\NotBlank
     */
    private $overall_rating;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $overall_review;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="rating", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCampus(): ?int
    {
        return $this->campus;
    }

    public function setCampus(int $campus): void
    {
        $this->campus = $campus;
    }

    public function getAcademics(): ?int
    {
        return $this->academics;
    }

    public function setAcademics(int $academics): void
    {
        $this->academics = $academics;
    }

    public function getLocation(): ?int
    {
        return $this->location;
    }

    public function setLocation(int $location): void
    {
        $this->location = $location;
    }

    public function getTeachingQuality(): ?int
    {
        return $this->teachingQuality;
    }

    public function setTeachingQuality(int $teachingQuality): void
    {
        $this->teachingQuality = $teachingQuality;
    }

    public function getJobProspects(): ?int
    {
        return $this->jobProspects;
    }

    public function setJobProspects(int $jobProspects): void
    {
        $this->jobProspects = $jobProspects;
    }

    public function getProfessors(): ?int
    {
        return $this->professors;
    }

    public function setProfessors(int $professors): void
    {
        $this->professors = $professors;
    }

    public function getAthletics(): ?int
    {
        return $this->athletics;
    }

    public function setAthletics(int $athletics): void
    {
        $this->athletics = $athletics;
    }

    public function getFood(): ?int
    {
        return $this->food;
    }

    public function setFood(int $food): void
    {
        $this->food = $food;
    }

    public function getDorms(): ?int
    {
        return $this->dorms;
    }

    public function setDorms(int $dorms): void
    {
        $this->dorms = $dorms;
    }

    public function getOverallRating(): ?int
    {
        return $this->overall_rating;
    }

    public function setOverallRating(int $overall_rating): void
    {
        $this->overall_rating = $overall_rating;
    }

    public function getOverallReview(): ?string
    {
        return $this->overall_rating;
    }

    public function setOverallReview(string $overall_review): void
    {
        $this->overall_review = $overall_review;
    }

    public function setUser(?User $user): void
    {
        $this->user = $user;

        // set (or unset) the owning side of the relation if necessary
        $newRating = null === $user ? null : $this;
        if ($user->getRating() !== $newRating) {
            $user->setRating($newRating);
        }
    }
}
