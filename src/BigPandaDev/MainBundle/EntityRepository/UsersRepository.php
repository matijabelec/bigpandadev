<?php

namespace BigPandaDev\MainBundle\EntityRepository;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;

class UsersRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        $user = $this->createQueryBuilder('u')
            ->where('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();

        if (null === $user) {
            $message = sprintf(
                'Unable to find an active admin BigPandaDevMainBundle:Users object identified by "%s".',
                $username
            );
            throw new UsernameNotFoundException($message);
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }

        return $this->find($user->getId());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
            || is_subclass_of($class, $this->getEntityName());
    }
    
    
    
    // active records
    public function findAllActive()
    {
        return $this->findBy(array('deleted'=>'0') );
    }
    
    public function findActiveBy(array $criteria)
    {
        return $this->findBy(array('deleted'=>'0') + $criteria);
    }
    
    public function findOneActiveBy(array $criteria)
    {
        return $this->findOneBy(array('deleted'=>'0') + $criteria);
    }
    
    public function findOneActiveById($id)
    {
        return $this->findOneBy(array('deleted'=>'0', 'id'=>$id) );
    }
    
    // deleted records
    public function findAllDeleted()
    {
        return $this->findBy(array('deleted'=>'1') );
    }
    
    public function findDeletedBy(array $criteria)
    {
        return $this->findBy(array('deleted'=>'1') + $criteria);
    }
    
    public function findOneDeletedBy(array $criteria)
    {
        return $this->findOneBy(array('deleted'=>'1') + $criteria);
    }
    
    public function findOneDeletedById($id)
    {
        return $this->findOneBy(array('deleted'=>'1', 'id'=>$id) );
    }
    
    public function findAllOrderedWithDeletedAtEnd() {
        $query = $this->getEntityManager()
                      ->createQuery('SELECT t 
                                    FROM BigPandaDevMainBundle:Users t
                                    ORDER BY t.deleted ASC');
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
