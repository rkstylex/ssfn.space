<?php

namespace App\EventListener;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class LocaleListener implements EventSubscriberInterface
{
    private $defaultLocale;

    public function __construct($defaultLocale = 'en')
    {
        $this->defaultLocale = $defaultLocale;
    }

    public function onKernelRequest(RequestEvent $event)
    {
        $request = $event->getRequest();
        // TODO: you have to check requested locale if exist in configuration language
        if ($locale = $request->get('locale')) {
            $request->getSession()->set('_locale', $request->get('locale'));
            $request->setLocale($locale);
        } else {
            $locale = $request->getSession()->get('_locale') == null ? 'en': $request->getSession()->get('_locale');
            $request->setLocale($locale);
        }
    }

    public static function getSubscribedEvents()
    {
        return array(
            // must be registered after the default Locale listener
            KernelEvents::REQUEST => array(array('onKernelRequest', 15)),
        );
    }
}