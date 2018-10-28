<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 14:28
 */

namespace Creational\FactoryMethod\LoggerFactory;


use Creational\FactoryMethod\Logger\StdoutLogger;

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): StdoutLogger
    {
        return new StdoutLogger();
    }
}