<?php

namespace App\Entity\Product\Comment;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class CommentDetails
{
    /**
     * @ORM\Column(type = "string")
     */
    private $title;

    /**
     * @ORM\Column(type = "string")
     */
    private $benefits;


    /**
     * @ORM\Column(type="string")
     */
    private $shortcoming;

    /**
     * @ORM\Column(type="string")
     */
    private $description;

//    /**
//     * @param int $rate
//     */
//    public function __construct(int $rate)
//    {
//        $this->rate = $rate;
//    }

//    /**
//     * @return mixed
//     */
//    public function rate()
//    {
//        return $this->rate;
//    }

    public function title()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function benefits()
    {
        return $this->benefits;
    }

    /**
     * @return mixed
     */
    public function shortcoming()
    {
        return $this->shortcoming;
    }

    /**
     * @return mixed
     */
    public function description()
    {
        return $this->description;
    }


}