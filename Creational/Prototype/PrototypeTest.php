<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 15:46
 */

namespace Creational\Prototype;


use Creational\Prototype\UserPrototype\BuyerUserPrototype;
use Creational\Prototype\UserPrototype\SellerUserPrototype;

class PrototypeTest
{
    public static function do()
    {
        $buyerUserPrototype = new BuyerUserPrototype();
        $sellerUserPrototype = new SellerUserPrototype();

        $buyerFixtures = [];
        $sellerFixtures = [];

        $start = microtime(true);
        $usage = memory_get_usage(true);
        for ($i = 1; $i < 100000; $i++) {
            $user = clone $buyerUserPrototype;
            $user->setId($i);
            $buyerFixtures[] = $user;
        }
        for ($i = 100000; $i < 1500000; $i++) {
            $user = clone $sellerUserPrototype;
            $user->setId($i);
            $sellerFixtures[] = $user;
        }
        $usage = memory_get_usage(true) - $usage;
        $time_elapsed_secs = microtime(true) - $start;
        print('Time: ' . $time_elapsed_secs . PHP_EOL);
        print('Memory usage: ' . $usage . PHP_EOL);

    }
}