<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArracheCoeurController extends AbstractController
{

    public function arrache(): Response
    {
        return $this->render('Variety/arrache_coeur.html.twig');
    }
}
