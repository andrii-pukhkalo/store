<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23.04.18
 * Time: 21:47
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart")
     */
    public function cart() {
        return $this->render('cart/cart.html.twig');
    }

    /**
     * @Route("/cart/checkout")
     */
    public function checkout() {
        return $this->render('cart/checkout.html.twig');
    }
}