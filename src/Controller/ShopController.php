<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShopController extends AbstractController
{

    public function shop(): Response
    {
        return $this->render('Front/shop.html.twig');
    }
}
