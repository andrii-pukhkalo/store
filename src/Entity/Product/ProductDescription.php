<?php

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 */
class ProductDescription
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One Product Description has One Product.
     * @OneToOne(targetEntity="App\Entity\Product\Product", inversedBy="productDescription")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */

    private $product;

    /**
     * @ORM\Column(type="string")
     */
    private $shortDescription;

    /**
     * @ORM\Embedded(class="App\Entity\Product\Rating")
     * @var Rating
     */
    private $rating;

    public function shortDescription() {
        return $this->shortDescription;
    }

    public function rating() {
        return $this->rating;
    }

}
