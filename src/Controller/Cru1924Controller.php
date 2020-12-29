<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Cru1924Controller extends AbstractController
{

    public function cru1924(): Response
    {
        return $this->render('Variety/cru_1924.html.twig');
    }
}
