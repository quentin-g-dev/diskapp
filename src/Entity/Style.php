<?php

namespace App\Entity;

use App\Repository\StyleRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity(repositoryClass=StyleRepository::class)
 */
class Style
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
     * @ORM\OneToMany(targetEntity="App\Entity\Disk", mappedBy="style")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="disks", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $disks;

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

}
