<?php

namespace BigPandaDev\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OrdersRepository extends EntityRepository
{
//    public function findOneByIdJoinedToCategory($id)
//    {
//        $query = $this->getEntityManager()
//            ->createQuery(
//                'SELECT p, c FROM AppBundle:Product p
//                JOIN p.category c
//                WHERE p.id = :id'
//            )->setParameter('id', $id);
//
//        try {
//            return $query->getSingleResult();
//        } catch (\Doctrine\ORM\NoResultException $e) {
//            return null;
//        }
//    }
    
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
                      ->createQuery('SELECT o 
                                    FROM BigPandaDevMainBundle:Orders o
                                    ORDER BY o.deleted ASC');
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
