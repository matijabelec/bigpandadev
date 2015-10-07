<?php

namespace BigPandaDev\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SettingsController extends Controller
{
    /**
     * @Route("/lang/{lang}", defaults={"lang"="en"}, name="_language_change")
     */
    public function langChangeAction(Request $request, $lang)
    {
        $this->get('request')->attributes->set('_locale', null);
        $this->get('session')->set('_locale', $lang);
        return $this->redirect($request->headers->get('referer'));
        //return $this->redirect($this->generateUrl('_homepage'));
    }
}
