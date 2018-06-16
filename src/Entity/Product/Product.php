<?php

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
      * @ORM\Embedded(class="App\Entity\Product\Money")
      * @var Money
      */
    private $price;

    /**
      * @ORM\Embedded(class="App\Entity\Product\Money")
      * @var Money
      */
    private $oldPrice;


    /**
     * One Product has Photo Gallery.
     * @OneToOne(targetEntity="App\Entity\Product\PhotoGallery", mappedBy="product")
     */
    private $photoGallery;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isNew;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSale;

    /**
     * One Product has ProductDescription.
     * @OneToOne(targetEntity="App\Entity\Product\ProductDescription", mappedBy="product")
     */
    private $description;

    /**
     * One Product has ProductDescription.
     * @OneToOne(targetEntity="App\Entity\Product\Specification\ProductSpecification", mappedBy="product")
     */
    private $specification;

    /**
     * One Product has Many ProductComments.
     * @OneToMany(targetEntity="App\Entity\Product\Comment\ProductComment", mappedBy="product")
     */
    private $comments;

    /**
     * One Product has Many related Products.
     * @OneToMany(targetEntity="App\Entity\Product\Product", mappedBy="parentProduct")
     */
    private $relatedProducts;

    /**
     * Many Products have One related Product.
     * @ManyToOne(targetEntity="App\Entity\Product\Product", inversedBy="relatedProducts")
     * @JoinColumn(name="parent_product_id", referencedColumnName="id")
     */
    private $parentProduct;

    /**
     * @return mixed
     */
    public function getParentProduct()
    {
        return $this->parentProduct;
    }

    /**
     * @param mixed $parentProduct
     */
    public function setParentProduct($parentProduct): void
    {
        $this->parentProduct = $parentProduct;
    }

    /**
     * Many Products have One related Product.
     * @ManyToOne(targetEntity="App\Entity\Product\ProductCategory")
     * @JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @param string $name
     * @param Money $money
     */
    public function __construct(string $name, Money $money)
    {
        $this->name = $name;
        $this->price = $money;

        $this->comments = new ArrayCollection();
        $this->relatedProducts = new ArrayCollection();
    }

    /**
      * @return int
      */
    public function id() {
        return $this->id;
    }

    /**
     * @return Money
     */
    public function price()
    {
        return $this->price;
    }
    /**
     * @return Money
     */
    public function oldPrice()
    {
        return $this->oldPrice;
    }

    public function name() {
        return $this->name;
    }

    /**
     * @return PhotoGallery
     */
    public function photoGallery()
    {
        return $this->photoGallery;
    }

    /**
     * @return mixed
     */
    public function isNew()
    {
        return $this->isNew;
    }

    /**
     * @return mixed
     */
    public function isSale()
    {
        return $this->isSale;
    }

    public function description() {
        return $this->description;
    }

    public function specification() {
        return $this->specification;
    }

    public function comments()
    {
        return $this->comments;
    }

    public function relatedProducts()
    {
        return $this->relatedProducts;
    }
}
