<?php

namespace App\Entity\Cart;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CartRepository")
 */
class Cart
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One Cart has Many CartItem.
     * @OneToMany(targetEntity="App\Entity\Cart\CartItem", mappedBy="cart")
     */
    private $cartItems;

    /**
     * One Cart has One User.
     * @OneToOne(targetEntity="App\Entity\User", inversedBy="cart")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function items()
    {
        return $this->cartItems;
    }

    /**
     * @param mixed $cartItems
     */
    public function setCartItems($cartItems): void
    {
        $this->cartItems = $cartItems;
    }

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->user;
    }
}
