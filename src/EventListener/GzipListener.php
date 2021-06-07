<?php

namespace App\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\HttpKernelInterface;

class GzipListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            KernelEvents::RESPONSE => array(array('onKernelResponse', -256))
        );
    }

    public function onKernelResponse($event)
    {
        if ($event->getRequestType() != HttpKernelInterface::MASTER_REQUEST) {
            return;
        }

        $request = $event->getRequest();
        $response = $event->getResponse();
        $encodings = $request->getEncodings();

        if (in_array('deflate', $encodings) && function_exists('gzencode')) {
            $content = gzencode($response->getContent());
            $response->setContent($content);
            $response->headers->set('Content-encoding', 'gzip');
        } elseif (in_array('deflate', $encodings) && function_exists('gzdeflate')) {
            $content = gzdeflate($response->getContent());
            $response->setContent($content);
            $response->headers->set('Content-encoding', 'deflate');
        }
    }
}