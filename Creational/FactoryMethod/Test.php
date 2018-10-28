<?php
namespace Creational\FactoryMethod;


use Creational\FactoryMethod\Logger\FileLogger;
use Creational\FactoryMethod\Logger\StdoutLogger;
use Creational\FactoryMethod\LoggerFactory\FileLoggerFactory;
use Creational\FactoryMethod\LoggerFactory\StdoutLoggerFactory;

class Test {

    public static function do()
    {
        $stdoutLoggerFactory = new StdoutLoggerFactory();
        $stdoutLogger = $stdoutLoggerFactory->createLogger();

        if ($stdoutLogger instanceof StdoutLogger) {
            print('StdoutLogger Message: ');
            $stdoutLogger->log('logger message test');
            print('StdoutLogger OK' . PHP_EOL);
        }

        $fileLoggerFactory = new FileLoggerFactory(__DIR__ . '/log.txt');
        $fileLogger = $fileLoggerFactory->createLogger();

        if ($fileLogger instanceof FileLogger) {
            $fileLogger->log('logger message test');
            print('FileLogger OK' . PHP_EOL);
        }
    }
}
