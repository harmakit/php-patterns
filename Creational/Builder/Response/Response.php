<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 10:48
 */

namespace Creational\Builder\Response;


abstract class Response
{
    private $data = [];

    public function addData($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function removeData($key)
    {
        unset($this->data[$key]);
    }
}