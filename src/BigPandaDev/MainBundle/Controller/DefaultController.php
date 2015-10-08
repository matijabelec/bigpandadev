<?php

namespace BigPandaDev\MainBundle\Controller;

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
