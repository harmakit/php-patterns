<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 16:46
 */

namespace Creational\Prototype\UserPrototype;


class UserData
{
    private $email;
    private $username;
    private $address;

    public function __construct()
    {
        $this->email = 'example@domain.com';
        $this->username = 'user';
        $this->address = 'Russian Federation, Lake Baikal, West Coast, 7 yurt';
    }
}