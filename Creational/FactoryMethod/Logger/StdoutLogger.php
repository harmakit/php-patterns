<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 14:23
 */

namespace Creational\FactoryMethod\Logger;


class StdoutLogger implements Logger
{
    public function log($message)
    {
        echo $message . PHP_EOL;
    }
}