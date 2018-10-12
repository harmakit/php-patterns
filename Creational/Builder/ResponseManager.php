<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 11:07
 */

use Creational\Builder\ResponseBuilder\BuilderInterface;
use Creational\Builder\Response\Response;

class ResponseManager
{
    public function build(BuilderInterface $builder): Response
    {
        $builder->createResponse()
            ->addHeader()
            ->addHTTPCode()
            ->addMessage();

        return $builder->getResponse();
    }
}