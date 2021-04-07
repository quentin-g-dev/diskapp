<?php

namespace App\Entity;

use App\Repository\ProductionRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass=ProductionRepository::class)
 */
class Production
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
     * @ORM\OneToMany(targetEntity="App\Entity\Disk", mappedBy="production")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="disks", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $disks;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="productions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $curator;

    public function __construct () {
        $this->disks = new ArrayCollection();
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
     * @return Collection|Disk[]
     */
    public function getDisks() : Collection
    {
        return $this->disks;
    }

    public function getCurator(): ?User
    {
        return $this->curator;
    }

    public function setCurator(?User $curator): self
    {
        $this->curator = $curator;

        return $this;
    }
}
