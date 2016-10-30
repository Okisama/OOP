<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 31.10.16
 * Time: 0:32
 */

namespace Vendor\Reporter\Gotovka;


interface CookInterface
{
    /**
     * @param array $data
     */
    public function cook(array $recipe);
}

