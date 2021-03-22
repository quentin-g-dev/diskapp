<?php

namespace App\Entity;

use App\Entity\Style;
use App\Entity\Artist;
use App\Entity\Production;
use App\Repository\DiskRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=DiskRepository::class)
 */
class Disk
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Type("string")
     */
    private $name;

    /**

     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )     
     */
    private $artist;

    /**
     * @var Collection

     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )     
     */
    private $production;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date
     */
    private $published;

    /**
     * @var Collection

     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    private $style;

    /**
     * @ORM\Column(type="integer")
     * @Assert\PositiveOrZero
     * @Assert\Type(
     *     type="integer",
     *     message="The value {{ value }} is not a valid {{ type }}."
     * )
     */
    private $stock;

    /**
     * @ORM\Column(type="date")
     * @Assert\Date
     * @var string A "d-m-Y" formatted value
     */
    
    private $registered;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $barcode;


    public function __construct()
    {
        $this->artist = new ArrayCollection();
        $this->style = new ArrayCollection();
        $this->production = new ArrayCollection();
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

    public function getArtist(): ?int
    {
        return $this->artist;
    }

    public function setArtist(int $artist): self
    {
        $this->artist = $artist;
        return $this;
    }

    public function getProduction(): ?int
    {
        return $this->production;
    }

    public function setProduction(int $production): self
    {
        $this->production = $production;
        return $this;
    }

    public function getPublished(): ?\DateTimeInterface
    {
        return $this->published;
    }

    public function setPublished(\DateTimeInterface $published): self
    {
        $this->published = $published;
        return $this;
    }

    public function getStyle(): ?int
    {
        return $this->style;
    }

    public function setStyle(int $style): self
    {
        $this->style = $style;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getRegistered(): ?\DateTimeInterface
    {
        return $this->registered;
    }

    public function setRegistered(\DateTimeInterface $registered): self
    {
        $this->registered = $registered;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;
        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }
}
