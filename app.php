<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 21/10/2018
 * Time: 22:25
 */
include_once 'Autoloader.php';

print ('Hello' . PHP_EOL);

$loader = new Autoloader();
$loader->register();

$loader->addNamespace('Creational\Builder', 'Creational/Builder');
$loader->addNamespace('Creational\Builder\Response', 'Creational/Builder/Response');
$loader->addNamespace('Creational\Builder\ResponseBuilder', 'Creational/Builder/ResponseBuilder');
$loader->addNamespace('Creational\Builder\Response\Components', 'Creational/Builder/Response/Components');

\Creational\Builder\Test::do();
