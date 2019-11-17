<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\ReportRepository")
 */
class Report
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Users", cascade={"persist", "remove"})
     */
    private $creatorId;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\ReportType", cascade={"persist", "remove"})
     */
    private $reportTypeId;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $photos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $companyComment;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $anonimous;

    /**
     * @ORM\Column(type="string", length=5000, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lat;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $lang;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatorId(): ?Users
    {
        return $this->creatorId;
    }

    public function setCreatorId(?Users $creatorId): self
    {
        $this->creatorId = $creatorId;

        return $this;
    }

    public function getReportTypeId(): ?ReportType
    {
        return $this->reportTypeId;
    }

    public function setReportTypeId(?ReportType $reportTypeId): self
    {
        $this->reportTypeId = $reportTypeId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPhotos(): ?string
    {
        return $this->photos;
    }

    public function setPhotos(?string $photos): self
    {
        $this->photos = $photos;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCompanyComment(): ?string
    {
        return $this->companyComment;
    }

    public function setCompanyComment(?string $companyComment): self
    {
        $this->companyComment = $companyComment;

        return $this;
    }

    public function getAnonimous(): ?bool
    {
        return $this->anonimous;
    }

    public function setAnonimous(?bool $anonimous): self
    {
        $this->anonimous = $anonimous;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(?float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLang(): ?float
    {
        return $this->lang;
    }

    public function setLang(?float $lang): self
    {
        $this->lang = $lang;

        return $this;
    }
}
