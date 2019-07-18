<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
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
     * @ORM\Column(name="societyName", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $societyname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="societyType", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $societytype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nameOfContact", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nameofcontact;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactPost", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $contactpost;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactNumber", type="string", nullable=true, options={"default"="NULL"})
     */
    private $contactnumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contactEmail", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $contactemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $notes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocietyname(): ?string
    {
        return $this->societyname;
    }

    public function setSocietyname(?string $societyname): self
    {
        $this->societyname = $societyname;

        return $this;
    }

    public function getSocietytype(): ?string
    {
        return $this->societytype;
    }

    public function setSocietytype(?string $societytype): self
    {
        $this->societytype = $societytype;

        return $this;
    }

    public function getNameofcontact(): ?string
    {
        return $this->nameofcontact;
    }

    public function setNameofcontact(?string $nameofcontact): self
    {
        $this->nameofcontact = $nameofcontact;

        return $this;
    }

    public function getContactpost(): ?string
    {
        return $this->contactpost;
    }

    public function setContactpost(?string $contactpost): self
    {
        $this->contactpost = $contactpost;

        return $this;
    }

    public function getContactnumber(): ?int
    {
        return $this->contactnumber;
    }

    public function setContactnumber(?int $contactnumber): self
    {
        $this->contactnumber = $contactnumber;

        return $this;
    }

    public function getContactemail(): ?string
    {
        return $this->contactemail;
    }

    public function setContactemail(?string $contactemail): self
    {
        $this->contactemail = $contactemail;

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


}
