<?php

namespace BigPandaDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="BigPandaDev\MainBundle\EntityRepository\OrdersRepository")
 */
class Orders
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
     * @ORM\Column(type="integer", length=1)
     */
    private $deleted = 0;
    
    
    
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="Offers")
     * @ORM\JoinColumn(name="offer_id", referencedColumnName="id")
     **/
    private $offer;
    
    
    
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
     * @return Orders
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
     * @return Orders
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
     * @return Orders
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
     * @return Orders
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
     * Set description
     *
     * @param string $description
     *
     * @return Orders
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
     * @return Orders
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
     * @return Orders
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
     * Set offer
     *
     * @param \BigPandaDev\MainBundle\Entity\Offers $offer
     *
     * @return Orders
     */
    public function setOffer(\BigPandaDev\MainBundle\Entity\Offers $offer = null)
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * Get offer
     *
     * @return \BigPandaDev\MainBundle\Entity\Offers
     */
    public function getOffer()
    {
        return $this->offer;
    }
}
