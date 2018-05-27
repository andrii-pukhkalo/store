<?php

namespace App\Entity\Product\Specification;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"property" = "Property", "color" = "Color", "shoeSize" = "ShoeSize"})
 */
class Property
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many Properties have One Product Specification.
     * @ManyToOne(targetEntity="App\Entity\Product\Specification\ProductSpecification", inversedBy="properties")
     * @JoinColumn(name="product_specification_id", referencedColumnName="id")
     */
    private $productSpecification;

}