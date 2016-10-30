<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 31.10.16
 * Time: 1:59
 */

namespace Vendor\Reporter\Gotovka;


class FryCook extends AbstractCooking implements CookInterface
{
    /**
     * @param array $recipe
     */
    public function cook(array $recipe)
    {
        // TODO: Implement cook() method.
        $this->makeDish($recipe);
    }
}