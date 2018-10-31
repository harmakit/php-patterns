<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 21/10/2018
 * Time: 22:25
 */
require_once __DIR__ . '/vendor/autoload.php';
require_once 'Menu.php';

$menu = new Menu();
$menu->printMenu('main');

while (true) {
    $menu->read($input);
    $menu->act($input);
}
