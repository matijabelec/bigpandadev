<?php
namespace BigPandaDev\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="app_user_roles")
 * @ORM\Entity(repositoryClass="BigPandaDev\MainBundle\EntityRepository\UserRolesRepository")
 */
class UserRoles
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=30, unique=true)
     */
    private $name;
    
    
    
    
    

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
     * @return UserRole
     */
    public function setName($name)
    {
        $this->username = $username;

        return $this;
    }
    
    public function getName()
    {
        return $this->name;
    }
}
