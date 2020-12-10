<?php
//src/Controller/frontController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class frontController extends AbstractController
{
    /**
     * @Route("/Front/home")
     */
    public function base(): Response{

        return $this->render('Front/home.html.twig');
    }
}
