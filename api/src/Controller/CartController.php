<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart")
     */
    public function cart() {
        return $this->render('cart/cart.html.twig', [
            'cart' => $this->getUser()->cart()
        ]);
    }

    /**
     * @Route("/cart/checkout")
     */
    public function checkout() {
        return $this->render('cart/checkout.html.twig');
    }
}