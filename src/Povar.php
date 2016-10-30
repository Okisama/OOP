<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.10.16
 * Time: 16:43
 */

namespace Vendor\Reporter;


use Vendor\Reporter\Havchik\FoodInterface;
use Vendor\Reporter\Gotovka\CookInterface;


class Povar
{
    /**
     * @var FoodInterface
     */
    private $food;
    /**
     * @param Foodinterface $food
     */
    public function __construct(FoodInterface $food)
    {
        $this->food = $food;
    }
    /**
     * @param string $url
     * @param CookInterface $cook
     */
    public function cookFood($url, CookInterface $cook)
    {
        $recipe = $this->food->takeSome($url);
        $cook->cook($recipe);
    }
}