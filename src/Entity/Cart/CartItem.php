<?php

namespace App\Entity\Cart;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartRepository")
 */
class CartItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many ProductComments have One Product.
     * @ManyToOne(targetEntity="App\Entity\Cart\Cart", inversedBy="cartItems")
     * @JoinColumn(name="cart_id", referencedColumnName="id")
     * @var Cart
     */
    private $cart;


    /**
     * Many CartItem has one Product.
     * @ManyToOne(targetEntity="App\Entity\Product\Product")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function product()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }
}
