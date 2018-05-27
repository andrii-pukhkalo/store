<?php

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * @ORM\Entity
 */
class Photo
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
    private $fullName;

    /**
     * @ORM\Column(type="string")
     */
    private $fullNameLargePhoto;


    /**
     * Many Photos have One PhotoGallery.
     * @ManyToOne(targetEntity="App\Entity\Product\PhotoGallery", inversedBy="photos")
     * @JoinColumn(name="photo_gallery_id", referencedColumnName="id")
     * @var PhotoGallery
     */
    private $photoGallery;

    public function id() {
        return $this->id;
    }

    public function fullName()
    {
        return $this->fullName;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    public function fullNameLargePhoto()
    {
        return $this->fullNameLargePhoto;
    }

    public function isMain() {
        $condition = $this->id == $this->photoGallery->mainPhoto()->id();
        return $condition;
    }
}
