<?php
/**
 * Created by PhpStorm.
 * User: rokka
 * Date: 30.10.16
 * Time: 16:44
 */

require_once __DIR__ . '/vendor/autoload.php';

$havchik = new \Vendor\Reporter\Havchik\Kartofan('path_to_recipe');
$povar = new \Vendor\Reporter\Povar($havchik);
$povar->cookFood('http://example.com', new \Vendor\Reporter\Gotovka\FryCook(__DIR__ . 'fryPotato'));
$povar->cookFood('http://example.com', new \Vendor\Reporter\Gotovka\FryCookExtendedViaInheritance(__DIR__ . 'extraFryPotato'));