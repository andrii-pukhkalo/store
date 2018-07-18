<?php

namespace App\Controller;

use App\Entity\Product\Money;
use App\Entity\Product\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Common\Persistence\ObjectManager as ObjectManager;

class HomeController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function index() {

        $repository = $this->getDoctrine()->getRepository(Product::class);


        /**
         * @var $product Product
         */
        $product = $repository->find(1);

        return $this->render('home/index.html.twig');
    }

    /**
      * @param ObjectManager $entityManager
      * @Route("/persist")
      */
    public function persist(ObjectManager $entityManager)
    {

        $newProduct = new Product('andrew', new Money(10, 'UAH'));

        $entityManager->persist($newProduct);
        $entityManager->flush();
        exit;

    }
}