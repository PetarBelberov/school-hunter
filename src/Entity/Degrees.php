<?php

namespace App\Entity;

use App\Repository\DegreesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DegreesRepository::class)
 */
class Degrees
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Major::class, mappedBy="degrees")
     */
    private $majors;

    public function __construct()
    {
        $this->majors = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Major[]
     */
    public function getMajors(): Collection
    {
        return $this->majors;
    }

    public function addMajor(Major $major): self
    {
        if (!$this->majors->contains($major)) {
            $this->majors[] = $major;
            $major->addDegree($this);
        }

        return $this;
    }

    public function removeMajor(Major $major): self
    {
        if ($this->majors->removeElement($major)) {
            $major->removeDegree($this);
        }

        return $this;
    }
}
