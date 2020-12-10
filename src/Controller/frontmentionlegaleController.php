<?php
//src/Controller/frontmentionlegaleController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class frontmentionlegaleController extends AbstractController
{
    /**
     * @Route("/Front/mention_legale")
     */
    public function mention(): Response{

        return $this->render('Front/mention_legale.html.twig');
    }
}