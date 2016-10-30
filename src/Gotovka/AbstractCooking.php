<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.10.16
 * Time: 17:40
 */

namespace Vendor\Reporter\Gotovka;


abstract class AbstractCooking
{

    // @var string

    private $dishName;

    //@param string $dishName

    public function __construct($dishName)
    {
        $this->dishName = $dishName;
    }

    // @param string $recipe

    protected function makeDish($recipe)
    {
        // Cooking dish by recipe ...
    }
}