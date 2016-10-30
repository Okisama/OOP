<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 31.10.16
 * Time: 2:10
 */

namespace Vendor\Reporter\Gotovka;


class FryCookExtendedViaInheritance extends FryCook
{
    public function __construct($extraDish)
    {
        $dishName = $extraDish;
        parent::__construct($dishName);
    }
}