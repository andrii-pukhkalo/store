<?php

namespace App\Entity\Product\Comment;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class AverageEstimate
{
    /**
     * @ORM\Column(type = "smallint")
     */
    private $rate;

    /**
     * @param int $rate
     */
    public function __construct(int $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return mixed
     */
    public function rate()
    {
        return $this->rate;
    }
}