<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 14:44
 */

class Menu
{
    const MENU_EXIT = 'q';
    const MENU_BACK = 'b';

    private $current;
    private $menus = [
        'main',
        'creational'
    ];

    public function printMenu($menu, $clear = true)
    {
        if($clear) {
            $this->clear();
        }
        if (!in_array($menu, $this->menus, true)) {
            print ('Unknown menu' . PHP_EOL);
            $this->printMenu($this->current);
            return;
        }
        $this->current = $menu;
        switch ($menu) {
            case 'main':
                $this->printMainMenu();
                break;
            case 'creational':
                $this->printCreationalMenu();
                break;
        }

    }

    private function printMainMenu()
    {
        print (
            '1 - Creational' . PHP_EOL .
            self::MENU_EXIT . ' - Exit' . PHP_EOL
        );
    }

    private function printCreationalMenu()
    {
        print (
            '1 - Builder' . PHP_EOL .
            '2 - FactoryMethod' . PHP_EOL .
            '3 - Prototype' . PHP_EOL .
            self::MENU_EXIT . ' - Exit' . PHP_EOL .
            self::MENU_BACK . ' - Back' . PHP_EOL
        );
    }

    public function read(&$input)
    {
        $input = readline(PHP_EOL . 'Select menu item: ');
    }

    public function act($input)
    {
        if ($input === self::MENU_EXIT) {
            exit(0);
        }
        elseif ($input === self::MENU_BACK) {
            $this->printMenu('main');
        }
        elseif ($this->current === 'main') {
            if (!array_key_exists($input, $this->menus)) {
                $this->printMenu($this->current);
            }
            $this->printMenu($this->menus[$input]);
        }
        elseif ($this->current === 'creational') {
            $this->creationalItems($input);
        }

        print PHP_EOL;
    }

    private function creationalItems($item)
    {
        $this->clear();
        switch ($item) {
            case '1':
                \Creational\Builder\Test::do();
                print PHP_EOL;
                break;
            case '2':
                \Creational\FactoryMethod\Test::do();
                print PHP_EOL;
                break;
            case '3':
                print('Prototype: ' . PHP_EOL);
                \Creational\Prototype\PrototypeTest::do();
                print PHP_EOL;
                print('Initiating: ' . PHP_EOL);
                \Creational\Prototype\InitiatingTest::do();
                print PHP_EOL;
                break;
        }

        $this->printMenu($this->current, false);
    }

    private function clear()
    {
        system('clear');
    }
}