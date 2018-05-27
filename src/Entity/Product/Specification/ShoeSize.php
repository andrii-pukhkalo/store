<?php

namespace App\Entity\Product\Specification;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  */
class ShoeSize extends Property
{
    /**
     * @ORM\Column(type="string")
     */
    private $size;
    /**
     * @ORM\Column(type="string")
     */



    public function name() {
        return 'Shoe size';
    }

    /**
      * @return string
      */
    public function value() {
        return $this->size;
    }

    public function viewAsHtml()
    {
        return $this->value();
    }
}