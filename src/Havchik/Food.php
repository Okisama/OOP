<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.10.16
 * Time: 16:52
 */

namespace Vendor\Reporter\Havchik;


interface Food
{
    /**
     * @param string $url
     * @return array
     */
    public function takeSome($url)
}