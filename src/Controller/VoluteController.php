<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoluteController extends AbstractController
{

    public function volute(): Response
    {
        return $this->render('Variety/volute.html.twig');
    }
}
