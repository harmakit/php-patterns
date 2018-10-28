<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 15:44
 */

namespace Creational\Prototype\UserPrototype;


class SellerUserPrototype extends UserPrototype
{
    protected $role = 'ROLE_USER_SELLER';

    public function __clone()
    {

    }
}