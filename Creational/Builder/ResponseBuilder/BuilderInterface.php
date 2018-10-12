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
    public function createResponse(): Response;

    public function addHeader(): Response;

    public function addHTTPCode(): Response;

    public function addMessage(): Response;

    public function getResponse(): Response;
}