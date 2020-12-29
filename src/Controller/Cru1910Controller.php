<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Cru1910Controller extends AbstractController
{

    public function cru1910(): Response
    {
        return $this->render('Variety/cru_1910.html.twig');
    }
}
