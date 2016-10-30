<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.10.16
 * Time: 16:49
 */

namespace Vendor\Reporter\Havchik;


class Kartofan implements FoodInterface
{

    private $path;
    /**
     * @param string $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }


    public function takeSome($url)
    {
        // Getting coordinates of food by $this->path
        return [
            'x' => 152,
            'y' => 254,
            'z' => 25
        ];
    }
}