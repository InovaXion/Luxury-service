<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidatures
 *
 * @ORM\Table(name="candidatures", indexes={@ORM\Index(name="candidate_id", columns={"candidate_id"}), @ORM\Index(name="jobOffer_id", columns={"jobOffer_id"})})
 * @ORM\Entity
 */
class Candidatures
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $datecreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdated", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $dateupdated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeleted", type="datetime", nullable=false, options={"default"="'0000-00-00 00:00:00'"})
     */
    private $datedeleted;

    /**
     * @var \Candidates
     *
     * @ORM\ManyToOne(targetEntity="Candidates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="candidate_id", referencedColumnName="id")
     * })
     */
    private $candidate;

    /**
     * @var \Joboffers
     *
     * @ORM\ManyToOne(targetEntity="Joboffers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jobOffer_id", referencedColumnName="id")
     * })
     */
    private $joboffer;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCandidate(): ?Candidates
    {
        return $this->candidate;
    }

    public function setCandidate(?Candidates $candidate): self
    {
        $this->candidate = $candidate;

        return $this;
    }

    public function getJoboffer(): ?Joboffers
    {
        return $this->joboffer;
    }

    public function setJoboffer(?Joboffers $joboffer): self
    {
        $this->joboffer = $joboffer;

        return $this;
    }


}
