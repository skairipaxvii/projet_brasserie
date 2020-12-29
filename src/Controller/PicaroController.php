<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PicaroController extends AbstractController
{

    public function picaro(): Response
    {
        return $this->render('Variety/picaro.html.twig');
    }
}
