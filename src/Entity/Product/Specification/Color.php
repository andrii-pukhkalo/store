<?php

namespace App\Entity\Product\Specification;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity
  */
class Color extends Property
{
    /**
     * @ORM\Column(type="string")
     */
    private $r;
    /**
     * @ORM\Column(type="string")
     */
    private $g;
    /**
     * @ORM\Column(type="string")
     */
    private $b;

    /**
     * @return mixed
     */
    public function r()
    {
        return $this->r;
    }

    /**
     * @return mixed
     */
    public function g()
    {
        return $this->g;
    }

    /**
     * @return mixed
     */
    public function b()
    {
        return $this->b;
    }

    public function name()
    {
        return 'Color';
    }

    public function value()
    {
        return $this->r() . ',' . $this->g() . ',' . $this->b();
    }

    public function viewAsHtml()
    {
        return '<a class="product-details-color" href="#"></a>';
    }
}