<?php

namespace App\Entity\Product\Comment;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 */
class ProductEstimate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $value;


    /**
     * Many ProductEstimates have One ProductComment.
     * @ManyToOne(targetEntity="App\Entity\Product\Comment\ProductComment", inversedBy="estimates")
     * @JoinColumn(name="product_comment_id", referencedColumnName="id")
     * @var ProductComment
     */
    private $productComment;

    public function id() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }
}
