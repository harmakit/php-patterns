<?php
namespace Creational\Builder\ResponseBuilder;
use Creational\Builder\Response\Response;

/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 10:39
 */

interface BuilderInterface
{
    public function createResponse(): BuilderInterface;

    public function addHeader(): BuilderInterface;

    public function addHTTPCode(): BuilderInterface;

    public function addMessage(): BuilderInterface;

    public function getResponse(): Response;
}