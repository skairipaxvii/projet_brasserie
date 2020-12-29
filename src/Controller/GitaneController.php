<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GitaneController extends AbstractController
{

    public function gitane(): Response
    {
        return $this->render('Variety/gitane.html.twig');
    }
}
