<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuciteController extends AbstractController
{

    public function lucite(): Response
    {
        return $this->render('Variety/lucite.html.twig');
    }
}
