<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Joboffers
 *
 * @ORM\Table(name="jobOffers", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="client_id", columns={"client_id"})})
 * @ORM\Entity
 */
class Joboffers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jobTitle", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $jobtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="jobType", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $jobtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $location;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="closingDate", type="date", nullable=true, options={"default"="NULL"})
     */
    private $closingdate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="salary", type="string", nullable=true, options={"default"="NULL"})
     */
    private $salary;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datecreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateUpdated", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $dateupdated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $datedeleted;

    /**
     * @var \Categorys|null
     *
     * @ORM\ManyToOne(targetEntity="Categorys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Clients
     *
     * @ORM\ManyToOne(targetEntity="Clients")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

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

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getJobtitle(): ?string
    {
        return $this->jobtitle;
    }

    public function setJobtitle(?string $jobtitle): self
    {
        $this->jobtitle = $jobtitle;

        return $this;
    }

    public function getJobtype(): ?string
    {
        return $this->jobtype;
    }

    public function setJobtype(?string $jobtype): self
    {
        $this->jobtype = $jobtype;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getClosingdate(): ?\DateTimeInterface
    {
        return $this->closingdate;
    }

    public function setClosingdate(?\DateTimeInterface $closingdate): self
    {
        $this->closingdate = $closingdate;

        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(?string $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    public function setDateupdated(\DateTimeInterface $dateupdated): self
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    public function getDatedeleted(): ?\DateTimeInterface
    {
        return $this->datedeleted;
    }

    public function setDatedeleted(\DateTimeInterface $datedeleted): self
    {
        $this->datedeleted = $datedeleted;

        return $this;
    }

    public function getCategory(): ?Categorys
    {
        return $this->category;
    }

    public function setCategory(?Categorys $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): self
    {
        $this->client = $client;

        return $this;
    }


}
