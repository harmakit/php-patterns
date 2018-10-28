<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 14:30
 */

namespace Creational\FactoryMethod\LoggerFactory;


use Creational\FactoryMethod\Logger\FileLogger;

class FileLoggerFactory implements LoggerFactory
{

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function createLogger()
    {
        return new FileLogger($this->file);
    }
}