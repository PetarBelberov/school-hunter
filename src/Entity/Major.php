<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=App\Repository\MajorRepository::class)
 */
class Major
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
     * @ORM\Column(type="string", unique=true)
     * @Assert\NotBlank
     */
    private $name;
    
     /** @ORM\OneToMany(targetEntity="App\Entity\UniversityMajor", mappedBy="major") */
     private $universityMajor;

     public function __construct()
     {
         $this->universityMajor = new ArrayCollection();
     }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function addUniversityMajor(UniversityMajor $universityMajors)
    {
        if ($this->universityMajor->contains($universityMajors)) {
            return;
        }
        $this->universityMajor[] = $universityMajors;
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
            if ($universityMajor->getMajor() === $this) {
                $universityMajor->setMajor(null);
            }
        }

        return $this;
    }
}
