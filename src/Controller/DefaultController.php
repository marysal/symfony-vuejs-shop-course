<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/homepage", name="app_default")
     */
    public function index(): Response
    {
        return $this->render('/main/_embed/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
