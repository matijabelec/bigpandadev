<?php
//
//namespace BigPandaDev\MainBundle\Entity;
//
//use Doctrine\ORM\Mapping as ORM;
//
///**
// * @ORM\Entity
// * @ORM\Table(name="tasks")
// */
//class Tasks
//{
//    /**
//     * @ORM\Column(name="id", type="integer", nullable=false)
//     * @ORM\Id
//     * @ORM\GeneratedValue(strategy="IDENTITY")
//     */
//    protected $id;
//    
//    
//    
//    /**
//     * @ORM\Column(name="price", type="decimal", scale=2)
//     */
//    protected $price;
//    
//    /**
//     * @ORM\Column(name="title", type="string", length=100)
//     */
//    protected $title;
//    
//    /**
//     * @ORM\Column(name="description", type="text")
//     */
//    protected $description;
//    
//    protected $taskType;
//    
//    protected $dateCreated;
//    protected $dateEndline;
//    protected $dateAssigned;
//    
//    protected $createdBy;
//    protected $assignedTo;
//    
//    /**
//     * @ORM\Column(name="status", type="integer")
//     */
//    protected $status;
//    
//    
//    
//    /**
//     * @ORM\Column(name="deleted", type="integer", length=1, nullable=false)
//     */
//    protected $deleted;
//    
//    /**
//     * @ORM\Column(name="deleted_by", type="string", length=60)
//     */
//    protected $deletedBy;
//}
