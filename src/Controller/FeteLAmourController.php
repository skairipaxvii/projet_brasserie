<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FeteLAmourController extends AbstractController
{

    public function fetelamour(): Response
    {
        return $this->render('Variety/fete_l_amour.html.twig');
    }
}
