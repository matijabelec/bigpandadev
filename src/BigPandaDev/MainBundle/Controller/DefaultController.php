<?php

namespace BigPandaDev\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_homepage")
     */
    public function indexAction()
    {
        return $this->render('BigPandaDevMainBundle:Default:homepage.html.twig', array() );
    }
    
//    {% if app.user and is_granted('ROLE_ADMIN') %}
//        {% include 'BigPandaDevMainBundle:Home:admin.html.twig' %}
//    {% elseif app.user and is_granted('ROLE_EMPLOYEE') %}
//        {% include 'BigPandaDevMainBundle:Home:employee.html.twig' %}
//    {% elseif app.user and is_granted('ROLE_CUSTOMER') %}
//        {% include 'BigPandaDevMainBundle:Home:customer.html.twig' %}
//    {% else %}
        
    /**
     * @Route("/home", name="_home")
     * @Security("has_role('ROLE_USER')")
     */
    public function homeAction()
    {
        if($this->isGranted('ROLE_ADMIN') ) {
            return $this->render('BigPandaDevMainBundle:Home:admin.html.twig', array() );
        } else if( $this->isGranted('ROLE_EMPLOYEE') ) {
            return $this->render('BigPandaDevMainBundle:Home:employee.html.twig', array() );
        } else if( $this->isGranted('ROLE_CUSTOMER') ) {
            return $this->render('BigPandaDevMainBundle:Home:customer.html.twig', array() );
        }
        
        return $this->render('BigPandaDevMainBundle:Default:homepage.html.twig', array() );
    }
    
    /**
     * @Route("/ajax/{action}/{param}", defaults={"action"="", "param"=""}, name="_ajax_get_form")
     */
    public function ajaxAction($action, $param)
    {
        switch($action) {
            case 'orders':
                $template = $this->forward('AcmeDemoBundle:Plugin:another.html.twig')->getContent();

                $json = json_encode($template);
                $response = new Response($json, 200);
                $response->headers->set('Content-Type', 'application/json');
                return $response;
            case 'order':
                $template = $this->forward('AcmeDemoBundle:Plugin:another.html.twig')->getContent();

                $json = json_encode($template);
                $response = new Response($json, 200);
                $response->headers->set('Content-Type', 'application/json');
                return $response;
        }
        
        return $this->render('BigPandaDevMainBundle:Default:homepage.html.twig', array() );
    }
}
