<?php

namespace BigPandaDev\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BigPandaDev\MainBundle\Controller\BigPandaBaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

use BigPandaDev\MainBundle\Entity\Orders;
use BigPandaDev\MainBundle\Form\Type\OrdersType;

class OrdersController extends BigPandaBaseController
{
    /**
     * @Route("/orders/{action}/{page}", defaults={"action"="","page"="1"}, name="_orders")
     * //@ _ Security ("has_role('ROLE_USER')")
     */
    public function ordersAction($action, $page)
    {
//        $user = $this->getUser();
        
        switch($action) {
            case 'page':
                if(!is_numeric($page) ) {
                    throw $this->createNotFoundException('Page number is wrong!');
                }
        }
        
        $ordersRepo = $this->getDoctrine()->getRepository('BigPandaDevMainBundle:Orders');
        
        if($this->isGranted('ROLE_ADMIN') )
            $orders = $ordersRepo->findAllOrderedWithDeletedAtEnd();
        else
            $orders = $ordersRepo->findAllActive();
        
        return $this->render('BigPandaDevMainBundle:Orders:orders.html.twig', array(
            'records' => $orders
        ));
    }
    
    /**
     * @Route("/order/{action}/{id}", defaults={"action"="","id"=""}, name="_order")
     */
    public function createOrderAction(Request $request, $action, $id)
    {
        $doc = $this->getDoctrine();
        $em = $doc->getManager();
        $repo = $em->getRepository('BigPandaDevMainBundle:Orders');
        
        switch($action) {
            case 'edit':
                $order = $repo->findOneActiveById($id);
                if(!$order) {
                    //throw $this->createNotFoundException('No order found for id ' . $id);
                    return $this->redirectToRoute('_orders');
                }
                
            case 'create':
                if(!isset($order) ) {
                    $order = new Orders();
                }
                
                $form = $this->createForm(new OrdersType(), $order);
                if(empty($id) ) {
                    $form->remove('id');
                }
                
                $form->handleRequest($request);
                if($form->isValid() ) {
                    $em->persist($order);
                    $em->flush();
                    return $this->redirectToRoute('_orders');
                }
                
                return $this->render('BigPandaDevMainBundle:Orders:order.html.twig', array(
                    'form' => $form->createView()
                ));
                
            case 'delete':
                $order = $repo->findOneActiveById($id);
                if(!$order) {
                    //throw $this->createNotFoundException('No order found for id ' . $id);
                    return $this->redirectToRoute('_orders');
                }
                
                $order->setDeleted(1); //$em->remove($order);
                $em->persist($order);
                $em->flush();
                
                return $this->redirectToRoute('_orders');
                
            default:
                $id = $action;
        }
        
        if(empty($id) ) {
            throw $this->createNotFoundException('No order found for id ' . $id);
        }
        
        $order = $repo->findOneBy(array('deleted'=>'0', 'id'=>$id));
        
        return $this->render('BigPandaDevMainBundle:Orders:order.html.twig', array(
            'order' => $order
        ));
    }
}
