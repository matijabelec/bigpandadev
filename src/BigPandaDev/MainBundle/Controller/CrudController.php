<?php

namespace BigPandaDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

use JMS\Serializer\SerializerBuilder;

use BigPandaDev\MainBundle\Entity\Orders;
use BigPandaDev\MainBundle\Entity\OrdersRepository;

class CrudController extends Controller
{
    /**
     * @Route("/ajax-get/{table}.{type}/{action}", defaults={"table"="", "type"="json", "action"=""}, name="_ajax")
     */
    public function tableAction($table, $action)
    {
        //$serializer = new Serializer();//$this->get('serializer');
        $serializer = SerializerBuilder::create()->build();
        
        switch($table) {
            case 'orders':
                $orders = $this->getDoctrine()
                                ->getManager()
                                ->getRepository('BigPandaDevMainBundle:Orders')
                                ->findAllActive();
                $records = array();
                foreach($orders as &$order) {
                    $records[] = $serializer->serialize($order, 'json');
                }
                
                $response = new JsonResponse();
                $response->setData(array('records' => $records));
                return $response;
        }
        
        $response = new JsonResponse();
        $response->setData(array('message' => 'Table not found'));
        return $response;
    }
}
