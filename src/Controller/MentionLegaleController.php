<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MentionLegaleController extends AbstractController
{

    public function mlegale (): Response
    {
        return $this->render('Front/mention_legale.html.twig');
    }
}