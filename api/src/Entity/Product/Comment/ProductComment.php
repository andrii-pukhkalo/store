<?php

namespace App\Entity\Product\Comment;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * @ORM\Entity
 */
class ProductComment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * Many ProductComments have One Product.
     * @ManyToOne(targetEntity="App\Entity\Product\Product", inversedBy="comments")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     * @var PhotoGallery
     */
    private $product;


    /**
     * One ProductComment has Many ProductEstimates.
     * @OneToMany(targetEntity="ProductEstimate", mappedBy="productComment")
     */
    private $estimates;

    /**
     * @ORM\Embedded(class="App\Entity\Product\Comment\AverageEstimate")
     * @var AverageEstimate
     */
    private $averageEstimate;

    /**
     * @ORM\Embedded(class="App\Entity\Product\Comment\CommentDetails")
     * @var CommentDetails
     */
    private $commentDetails;

    public function __construct()
    {
        $this->estimates = new ArrayCollection();
    }

    public function properties() {
        return $this->estimates;
    }

    public function estimates()
    {
        return $this->estimates;
    }

    public function details()
    {
        return $this->commentDetails;
    }
}
