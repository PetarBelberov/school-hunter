<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=App\Repository\UniversityRepository::class)
 */
class University
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(min=20)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $address;

     /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $phone;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    /**
     * @var string
     * 
     * @ORM\Column(type="string")
     * @Assert\NotBlank
     */
    private $website;

     /**
     * @var Comment[]|ArrayCollection
     *
     * @ORM\OneToMany(
     *      targetEntity="Comment",
     *      mappedBy="university",
     *      orphanRemoval=true,
     *      cascade={"persist"}
     * )
     * @ORM\OrderBy({"publishedAt": "DESC"})
     */
    private $comments;

     /** @ORM\OneToMany(targetEntity="App\Entity\UniversityMajor", mappedBy="university") */
     private $universityMajor;

     /**
      * @ORM\OneToMany(targetEntity=Rating::class, mappedBy="university")
      */
     private $rating;


    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->universityMajor = new ArrayCollection();
        $this->rating = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddres(string $address): void
    {
        $this->address = $address;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): void
    {
        $this->website = $website;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComments(Comment $comment): void
    {
        $comment->setUniversity($this);
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
        }
    }

    public function removeComments(Comment $comment): void
    {
        $this->comments->removeElement($comment);
    }

    public function addUniversityMajor(UniversityMajor $universityMajors)
    {
        if ($this->universityMajor->contains($universityMajors)) {
            return;
        }
        $this->universityMajor[] = $universityMajors;
    }

    /**
     * @return Collection|Rating[]
     */
    public function getRating(): Collection
    {
        return $this->rating;
    }

    public function addRating(Rating $rating): void
    {
        if (!$this->rating->contains($rating)) {
            $this->rating[] = $rating;
            $rating->setUniversity($this);
        }
    }

    public function removeRating(Rating $rating): void
    {
        if ($this->rating->contains($rating)) {
            $this->rating->removeElement($rating);
            // set the owning side to null (unless already changed)
            if ($rating->getUniversity() === $this) {
                $rating->setUniversity(null);
            }
        }
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setUniversity($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUniversity() === $this) {
                $comment->setUniversity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|UniversityMajor[]
     */
    public function getUniversityMajor(): Collection
    {
        return $this->universityMajor;
    }

    public function removeUniversityMajor(UniversityMajor $universityMajor): self
    {
        if ($this->universityMajor->removeElement($universityMajor)) {
            // set the owning side to null (unless already changed)
            if ($universityMajor->getUniversity() === $this) {
                $universityMajor->setUniversity(null);
            }
        }

        return $this;
    }
}
