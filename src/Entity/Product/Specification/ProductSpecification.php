<?php

namespace App\Entity\Product\Specification;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * @ORM\Entity
 */
class ProductSpecification
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One Product Specification has One Product.
     * @OneToOne(targetEntity="App\Entity\Product\Product", inversedBy="productSpecification")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;


    /**
     * One ProductSpecification has Many Properties.
     * @OneToMany(targetEntity="Property", mappedBy="productSpecification")
     */
    private $properties;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    public function properties() {
        return $this->properties;
    }

}
