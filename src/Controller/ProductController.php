<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 23.04.18
 * Time: 21:47
 */

namespace App\Controller;

use App\Repository\ProductRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/products")
     * @param ProductRepository $productRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ProductRepository $productRepository) {
        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll()
        ]);
    }

    /**
     * @Route("/product/{id}")
     * @param $id
     * @param ProductRepository $productRepository
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function details($id, ProductRepository $productRepository) {
        $product = $productRepository->findOneBy(['id' => $id]);
        return $this->render('product/details.html.twig', [
            'product' => $product,
        ]);
    }
}