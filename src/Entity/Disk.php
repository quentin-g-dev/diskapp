<?php

namespace App\Entity;

use App\Entity\Style;
use App\Entity\Artist;
use App\Entity\Production;
use App\Repository\DiskRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations;
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Artist", inversedBy="disks")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="artist", referencedColumnName="id", onDelete="CASCADE")
     * })   
     */
    private $artist;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Production", inversedBy="disks")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="production", referencedColumnName="id", onDelete="CASCADE")
     * })   
     */
    private $production;

    /**
     * @ORM\Column(type="date")
     * @var string A "m-Y" formatted value
     */
    private $published;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Style", inversedBy="disks")
     * @ORM\JoinColumns({
     *  @ORM\JoinColumn(name="style", referencedColumnName="id", onDelete="CASCADE")
     * })   
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

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;
        return $this;
    }

    public function getProduction(): ?Production
    {
        return $this->production;
    }

    public function setProduction(?Production $production): self
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

    public function getStyle(): ?Style
    {
        return $this->style;
    }

    public function setStyle(?Style $style): self
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
