<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidates
 *
 * @ORM\Table(name="candidates", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="user_id_2", columns={"user_id"}), @ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class Candidates
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
     * @ORM\Column(name="gender", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adress", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $adress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationality", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="passport", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="curriculumVitae", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $curriculumvitae;

    /**
     * @var string|null
     *
     * @ORM\Column(name="profilPicture", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $profilpicture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currentLocation", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $currentlocation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dateOfBirth", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateofbirth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="placeOfBirth", type="string", nullable=true, options={"default"="NULL"})
     */
    private $placeofbirth;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="avaible", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $avaible;

    /**
     * @var string|null
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $experience;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shortDescription", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $shortdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $notes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=true, options={"default"="current_timestamp()"})
     */
    private $datecreated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateUpdated", type="datetime", nullable=true, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $dateupdated;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=true, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $datedeleted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="files", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $files;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="isAdmin", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isadmin;

    /**
     * @var \Categorys
     *
     * @ORM\ManyToOne(targetEntity="Categorys")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \Users
     *
     * @ORM\ManyToOne(targetEntity="Users", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPassport(): ?string
    {
        return $this->passport;
    }

    public function setPassport(?string $passport): self
    {
        $this->passport = $passport;

        return $this;
    }

    public function getCurriculumvitae(): ?string
    {
        return $this->curriculumvitae;
    }

    public function setCurriculumvitae(?string $curriculumvitae): self
    {
        $this->curriculumvitae = $curriculumvitae;

        return $this;
    }

    public function getProfilpicture(): ?string
    {
        return $this->profilpicture;
    }

    public function setProfilpicture(?string $profilpicture): self
    {
        $this->profilpicture = $profilpicture;

        return $this;
    }

    public function getCurrentlocation(): ?string
    {
        return $this->currentlocation;
    }

    public function setCurrentlocation(?string $currentlocation): self
    {
        $this->currentlocation = $currentlocation;

        return $this;
    }

    public function getDateofbirth(): ?\DateTimeInterface
    {
        return $this->dateofbirth;
    }

    public function setDateofbirth(?\DateTimeInterface $dateofbirth): self
    {
        $this->dateofbirth = $dateofbirth;

        return $this;
    }

    public function getPlaceofbirth(): ?string
    {
        return $this->placeofbirth;
    }

    public function setPlaceofbirth(?\DateTimeInterface $placeofbirth): self
    {
        $this->placeofbirth = $placeofbirth;

        return $this;
    }

    public function getAvaible(): ?bool
    {
        return $this->avaible;
    }

    public function setAvaible(?bool $avaible): self
    {
        $this->avaible = $avaible;

        return $this;
    }

    public function getExperience(): ?string
    {
        return $this->experience;
    }

    public function setExperience(?string $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    public function getShortdescription(): ?string
    {
        return $this->shortdescription;
    }

    public function setShortdescription(?string $shortdescription): self
    {
        $this->shortdescription = $shortdescription;

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

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(?\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getDateupdated(): ?\DateTimeInterface
    {
        return $this->dateupdated;
    }

    public function setDateupdated(?\DateTimeInterface $dateupdated): self
    {
        $this->dateupdated = $dateupdated;

        return $this;
    }

    public function getDatedeleted(): ?\DateTimeInterface
    {
        return $this->datedeleted;
    }

    public function setDatedeleted(?\DateTimeInterface $datedeleted): self
    {
        $this->datedeleted = $datedeleted;

        return $this;
    }

    public function getFiles(): ?string
    {
        return $this->files;
    }

    public function setFiles(?string $files): self
    {
        $this->files = $files;

        return $this;
    }

    public function getIsadmin(): ?bool
    {
        return $this->isadmin;
    }

    public function setIsadmin(?bool $isadmin): self
    {
        $this->isadmin = $isadmin;

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

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


}
