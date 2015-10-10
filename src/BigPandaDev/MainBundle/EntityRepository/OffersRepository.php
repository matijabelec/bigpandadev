<?php

namespace BigPandaDev\MainBundle\EntityRepository;

use Doctrine\ORM\EntityRepository;
use BigPandaDev\MainBundle\Entity\Offers;
use Doctrine\ORM\Tools\Pagination\Paginator;

class OffersRepository extends EntityRepository
{
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
                                    FROM BigPandaDevMainBundle:Offers t
                                    ORDER BY t.deleted ASC');
        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    
    
    public function getTable($page, $limit=10, $options=array() ) {
        if($page<1)
            $page = 1;
        $offset = ($page - 1) * $limit;
        
        $where =  '';
        if(isset($options['filter']) and is_array($options['filter']) ) {
            $where = 'WHERE';
            foreach($options['filter'] as &$f) {
                $where .= ' t.' . $f;
            }
        }
        
        // query
        $admin = isset($options['admin']) ? $options['admin'] : false;
        $dql = 'SELECT t, j
                FROM BigPandaDevMainBundle:Offers t 
                LEFT JOIN t.jobType j
                ' . $where . '
                ORDER BY t.deleted ASC, t.id DESC';
        $query = $this->getEntityManager()
                      ->createQuery($dql)
                      ->setFirstResult($offset)
                      ->setMaxResults($limit);
        $paginator = new Paginator($query, $fetchJoinCollection=true);
        
        
        // additional data for table
        $offer_statuses = array(
            1 => 'Available',
            2 => 'Not-available',
            3 => 'Soon',
            4 => 'Hidden'
        );
        
        
        $index = $offset + 1;
        $table = array();
        
        // fill rows
        $offer = new Offers();
        foreach ($paginator as &$offer) {
            $status = $offer->getStatus();
            $status_name = '';
            if(!empty($status) ) {
                $status_name = $offer_statuses[$status];
            }
            $job_type = $offer->getJobType();
            
            $row = array();
            $row['index'] = $index++;
            $row['id'] = $offer->getId();
            $row['name'] = $offer->getName();
            $row['description'] = $offer->getDescription();
            $row['status'] = $status_name;
            $row['price'] = $offer->getPrice();
            $row['job_type'] = $job_type ? $job_type->getName() : '';
            $row['deleted'] = $offer->getDeleted();
            
            $table[] = $row;
        }
        
        
        // prepare return data
        $count = count($paginator);
        $pages = ceil($count / $limit);
        
        if($page > $pages)
            return array();
        
        return array(
            'records' => $table,
            'pagination' => array(
                'count' => $count,
                'page' => $page,
                'pages' => $pages
            )
        );
        
        
//        $dql = "SELECT p, c FROM BlogPost p JOIN p.comments c";
//        $query = $entityManager->createQuery($dql)
//                               ->setFirstResult(0)
//                               ->setMaxResults(100);
    }
}
