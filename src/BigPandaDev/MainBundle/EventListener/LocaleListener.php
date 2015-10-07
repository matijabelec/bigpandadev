<?php

namespace BigPandaDev\MainBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class LocaleListener implements EventSubscriberInterface
{
    private $defaultLocale;
    private $localeList;

    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
        // Set a list of available translations
        $this->localeList = array('fr', 'en', 'de');
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();
     
        // No _locale found is session
        if (!$request->hasPreviousSession() || is_null($request->getSession()->get('_locale'))) {
            $preferredLocale = $request->getPreferredLanguage();
            // Match if user preference is the available translations
            foreach($this->localeList as $locale) {
                if (preg_match('/' . $locale . '/', $preferredLocale)) {
                    $request->getSession()->set('_locale', $locale);
                    $request->setLocale($locale);
                } 
            }
            // Not found in available translations, set parameters default
            if (!$request->hasPreviousSession()) {
                $request->getSession()->set('_locale', $this->defaultLocale);
            }
            return;
        }
        
        // _locale found in controller
        if ($locale = $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
            $request->setLocale($locale);
        }
        // _locale found in session
        elseif($locale = $request->getSession()->get('_locale')) {
            $request->setLocale($locale);
        }
    }
    
    public static function getSubscribedEvents()
    {
        return array(
            // must be registered before the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 17)),
        );
    }
}