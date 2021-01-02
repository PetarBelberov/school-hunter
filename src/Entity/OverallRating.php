<?php

namespace App\Entity;

use App\Repository\OverallRatingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OverallRatingRepository::class)
 */
class OverallRating
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $overallRating;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $overallReview;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOverallRating(): ?int
    {
        return $this->overallRating;
    }

    public function setOverallRating(int $overallRating): void
    {
        $this->overallRating = $overallRating;
    }

    public function getOverallReview(): ?string
    {
        return $this->overallReview;
    }

    public function setOverallReview(string $overallReview): void
    {
        $this->overallReview = $overallReview;
    }
}
