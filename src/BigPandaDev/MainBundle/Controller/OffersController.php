<?php

namespace BigPandaDev\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BigPandaDev\MainBundle\Controller\BigPandaBaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\BrowserKit\Request;
//use Symfony\Component\HttpFoundation\Response;

use BigPandaDev\MainBundle\Entity\Offers;
use BigPandaDev\MainBundle\Form\Type\OffersType;

class OffersController extends BigPandaBaseController
{
    /**
     * @Route("/offers/{action}/{page}", defaults={"action"="","page"=""}, name="_offers")
     */
    public function offersAction(Request $request, $action, $page)
    {
        switch($action) {
            case 'page':
                if(!is_numeric($page) ) {
                    throw $this->createNotFoundException('Page number is wrong!');
                }
        }
        
        if(!isset($page) || !is_numeric($page) ) {
            $page = 1;
        }
        
        $offersRepo = $this->getDoctrine()->getRepository('BigPandaDevMainBundle:Offers');
        
        $options = array();
        if(!$this->isGranted('ROLE_ADMIN') ) {
            $options['filter'] = array('deleted = 0');
        }
        
        $data = $offersRepo->getTable($page, 10, $options);
        
        if($request->isXmlHttpRequest()) {
            return $this->render('BigPandaDevMainBundle:Offers:offers_table.html.twig', $data);
        }
        return $this->render('BigPandaDevMainBundle:Offers:offers.html.twig', $data);
    }
    
    /**
     * @Route("/offer/{action}/{id}", defaults={"action"="","id"=""}, name="_offer")
     */
    public function offerAction(Request $request, $action, $id)
    {
        $doc = $this->getDoctrine();
        $em = $doc->getManager();
        $repo = $em->getRepository('BigPandaDevMainBundle:Offers');
        
        switch($action) {
            case 'order':
                if(empty($id) ) {
                    throw $this->createNotFoundException('No offer found for id ' . $id);
                }
                
                if($this->isGranted('ROLE_ADMIN') ) {
                    $offer = $repo->findOneById($id);
                } else {
                    $offer = $repo->findOneActiveById($id);
                }
                
                return $this->render('BigPandaDevMainBundle:Offers:offer.html.twig', array(
                    'offer' => $offer,
                    'actions' => array('back', 'confirm'),
                    'options' => array(
                        'route' => array(
                            'back' => $this->generateUrl('_offers'),
                            'confirm' => '#'
                        ),
                        'record' => array(
                            'id' => $id,
                            'name' => $offer->getName()
                        )
                    )
                ));
            
            case 'edit':
                $offer = $repo->findOneActiveById($id);
                if(!$offer) {
                    return $this->render('BigPandaDevMainBundle:Offers:offer.html.twig', array(
                        'offer' => $offer
                    ));
                }
                
            case 'create':
                if(!isset($offer) ) {
                    $offer = new Offers();
                    $offer->setCreatedBy($this->getUser() );
                }
                
                $form = $this->createForm(new OffersType(), $offer);
                if(empty($id) ) {
                    $form->remove('id');
                }
                
                $form->handleRequest($request);
                if($form->isValid() ) {
                    $em->persist($offer);
                    $em->flush();
                    return $this->redirectToRoute('_offers');
                }
                
                return $this->render('BigPandaDevMainBundle:Offers:offer.html.twig', array(
                    'form' => $form->createView()
                ));
                
            case 'delete':
                $offer = $repo->findOneActiveById($id);
                
                if(!$offer) {
                    throw $this->createNotFoundException('No offer found for id ' . $id);
                }
                
                $offer->setDeleted(1); //$em->remove($offer);
                $em->persist($offer);
                $em->flush();
                
                return $this->redirectToRoute('_offers');
            
            case 'undelete':
                if(!$this->isGranted('ROLE_ADMIN')) {
                    throw $this->createNotFoundException('Page not found!');
                }
                    
                $offer = $repo->findOneById($id);
                
                if(!$offer) {
                    throw $this->createNotFoundException('No offer found for id ' . $id);
                }
                
                $offer->setDeleted(0); //$em->remove($offer);
                $em->persist($offer);
                $em->flush();
                
                return $this->redirectToRoute('_offers');
            default:
                $id = $action;
        }
        
        if(empty($id) ) {
            throw $this->createNotFoundException('No offer found for id ' . $id);
        }
        
        $offer = $repo->getPreview($id);
        return $this->render('BigPandaDevMainBundle:Offers:offer.html.twig', array(
            'offer' => $offer
        ));
    }
}
