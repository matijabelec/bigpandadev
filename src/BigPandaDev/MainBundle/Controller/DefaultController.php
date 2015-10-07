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
}
