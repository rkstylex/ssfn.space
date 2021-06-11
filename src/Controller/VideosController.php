<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class VideosController extends AbstractController
{
    public function indexAction(): Response
    {
        return $this->render('videos/index.html.twig');
    }
}