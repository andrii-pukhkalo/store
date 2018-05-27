<?php

namespace App\Entity\Product;

use Doctrine\ORM\Mapping as ORM;


/**
  * @ORM\Embeddable()
  */
class Money
{
    /**
      * @ORM\Column(type = "float")
      */
    private $amount;

    /**
     * @ORM\Column(type = "string")
     */
    private $currency;

    /**
     * @param string $currency
     * @param float $amount
     */
    public function __construct(float $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * @return mixed
     */
    public function amount()
    {
        return $this->amount;
    }

    /**
     * @return mixed
     */
    public function currency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function amountInCurrency()
    {
        return $this->amount . ' ' . $this->currency;
    }
}