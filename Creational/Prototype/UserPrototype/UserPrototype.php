<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 28/10/2018
 * Time: 15:40
 */

namespace Creational\Prototype\UserPrototype;


abstract class UserPrototype
{
    protected $role;
    private $id;

    abstract public function __clone();

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}