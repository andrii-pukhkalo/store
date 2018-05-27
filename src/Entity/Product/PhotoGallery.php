<?php

namespace App\Entity\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity
 */
class PhotoGallery
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One PhotoGallery has One Main Photo.
     * @OneToOne(targetEntity="App\Entity\Product\Photo")
     * @JoinColumn(name="photo_id", referencedColumnName="id")
     */
    private $mainPhoto;

    /**
     * One PhotoGallery has Many Photos.
     * @OneToMany(targetEntity="Photo", mappedBy="photoGallery")
     */
    private $photos;

    /**
     * One Photo Gallery has One Product.
     * @OneToOne(targetEntity="App\Entity\Product\Product", inversedBy="photoGallery")
     * @JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $product;

    public function __construct()
    {
        $this->photos = new ArrayCollection();
    }

    /**
     * @return Photo
     */
    public function mainPhoto()
    {
        return $this->mainPhoto;
    }

    public function photos() {
        return $this->photos;
    }
}
