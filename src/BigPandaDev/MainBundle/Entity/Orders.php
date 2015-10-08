<?php

namespace BigPandaDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="orders")
 * @ORM\Entity(repositoryClass="BigPandaDev\MainBundle\Entity\OrdersRepository")
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
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(name="date_created", type="datetime")
     */
    private $dateCreated;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $deadline;
    
    /**
     * @ORM\Column(type="integer", length=1, nullable=false)
     */
    private $deleted = 0;
    
    /**
     * @ORM\Column(name="deleted_by", type="string", length=60, nullable=true)
     */
    private $deletedBy;
    
    
    
    public function __construct()
    {
        
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
     * Set deletedBy
     *
     * @param string $deletedBy
     *
     * @return Orders
     */
    public function setDeletedBy($deletedBy)
    {
        $this->deletedBy = $deletedBy;

        return $this;
    }

    /**
     * Get deletedBy
     *
     * @return string
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
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
     * Set deadline
     *
     * @param \DateTime $deadline
     *
     * @return Orders
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }
}