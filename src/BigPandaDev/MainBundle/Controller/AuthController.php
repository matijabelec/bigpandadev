<?php

namespace BigPandaDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AuthController extends Controller
{
    /**
     * @Route("/admin", name="_admin")
     */
    public function indexAction()
    {
        /*$user = new \BigPandaDev\MainBundle\Entity\User();
        $plainPassword = '12345';
        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $plainPassword);
        $user->setPassword($encoded);*/
        
        $content = array(
            'title' => 'Admin',
            'desc' => 'Admin desc'
        );
        
        print_r($encoded);
        
        return $this->render('BigPandaDevMainBundle:Home:home.html.twig', array(
            'content' => $content
        ));
    }
    
    
    
    /**
     * @Route("/login", name="_login")
     */
    public function loginAction(Request $request, $_locale)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'BigPandaDevMainBundle:Auth:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }
    
    /**
     * @Route("/login_check", name="_login_check")
     */
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
}
