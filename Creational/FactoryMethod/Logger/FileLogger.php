<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 14:24
 */

namespace Creational\FactoryMethod\Logger;


class FileLogger implements Logger
{

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function log($message)
    {
        file_put_contents($this->file, $message . PHP_EOL, FILE_APPEND);
    }

    public function setFile($file)
    {
        $this->file = $file;
    }
}