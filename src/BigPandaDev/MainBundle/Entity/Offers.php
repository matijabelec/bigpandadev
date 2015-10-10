<?php

namespace BigPandaDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="offers")
 * @ORM\Entity(repositoryClass="BigPandaDev\MainBundle\EntityRepository\OffersRepository")
 */
class Offers
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=80)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="created_by_id", referencedColumnName="id")
     **/
    private $createdBy;
    
    /**
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;
    
    /**
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="deleted_by_id", referencedColumnName="id")
     **/
    private $deletedBy;
    
    /**
     * @ORM\Column(name="date_deleted", type="datetime", nullable=true)
     */
    private $dateDeleted;
    
    /**
     * @ORM\Column(type="integer", length=1, nullable=false)
     */
    private $deleted = 0;
    
    
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="JobTypes")
     * @ORM\JoinColumn(name="job_type_id", referencedColumnName="id")
     **/
    private $jobType;
    
    /**
     * @ORM\Column(name="date_available_from", type="datetime", nullable=true)
     */
    private $dateAvailableFrom;
    
    /**
     * @ORM\Column(name="date_available_to", type="datetime", nullable=true)
     */
    private $dateAvailableTo;
    
    /**
     * @ORM\Column(name="price", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $price;
    
    /**
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;
    
    
    
    public function __construct()
    {
        $this->dateCreated = new \DateTime('NOW');
    }



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Offers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return Offers
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateDeleted
     *
     * @param \DateTime $dateDeleted
     *
     * @return Offers
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;

        return $this;
    }

    /**
     * Get dateDeleted
     *
     * @return \DateTime
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }

    /**
     * Set deleted
     *
     * @param integer $deleted
     *
     * @return Offers
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return integer
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Offers
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Offers
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdBy
     *
     * @param \BigPandaDev\MainBundle\Entity\Users $createdBy
     *
     * @return Offers
     */
    public function setCreatedBy(\BigPandaDev\MainBundle\Entity\Users $createdBy = null)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \BigPandaDev\MainBundle\Entity\Users
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set deletedBy
     *
     * @param \BigPandaDev\MainBundle\Entity\Users $deletedBy
     *
     * @return Offers
     */
    public function setDeletedBy(\BigPandaDev\MainBundle\Entity\Users $deletedBy = null)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return \BigPandaDev\MainBundle\Entity\Users
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * Set jobType
     *
     * @param \BigPandaDev\MainBundle\Entity\JobTypes $jobType
     *
     * @return Offers
     */
    public function setJobType(\BigPandaDev\MainBundle\Entity\JobTypes $jobType = null)
    {
        $this->jobType = $jobType;

        return $this;
    }

    /**
     * Get jobType
     *
     * @return \BigPandaDev\MainBundle\Entity\JobTypes
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Set dateAvailableTo
     *
     * @param \DateTime $dateAvailableTo
     *
     * @return Offers
     */
    public function setDateAvailableTo($dateAvailableTo)
    {
        $this->dateAvailableTo = $dateAvailableTo;

        return $this;
    }

    /**
     * Get dateAvailableTo
     *
     * @return \DateTime
     */
    public function getDateAvailableTo()
    {
        return $this->dateAvailableTo;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Offers
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    
    public function __toString() {
        return $this->name . ' (' . $this->id . ')';
    }

    /**
     * Set dateAvailableFrom
     *
     * @param \DateTime $dateAvailableFrom
     *
     * @return Offers
     */
    public function setDateAvailableFrom($dateAvailableFrom)
    {
        $this->dateAvailableFrom = $dateAvailableFrom;

        return $this;
    }

    /**
     * Get dateAvailableFrom
     *
     * @return \DateTime
     */
    public function getDateAvailableFrom()
    {
        return $this->dateAvailableFrom;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Offers
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }
}
