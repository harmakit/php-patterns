<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 11:01
 */

namespace Creational\Builder\ResponseBuilder;


use Creational\Builder\Response\Components\Header;
use Creational\Builder\Response\Components\HTTPCode;
use Creational\Builder\Response\Components\Message;
use Creational\Builder\Response\JSONResponse;
use Creational\Builder\Response\Response;

class JSONResponseBuilder implements BuilderInterface
{

    /**
     * @var JSONResponse
     */
    private $jsonResponse;

    public function createResponse(): BuilderInterface
    {
        $this->jsonResponse = new JSONResponse();
        return $this;
    }

    public function addHeader(): BuilderInterface
    {
        $this->jsonResponse->addData('header', new Header());
        return $this;
    }

    public function addHTTPCode(): BuilderInterface
    {
        $this->jsonResponse->addData('HTTPcode', new HTTPCode());
        return $this;
    }

    public function addMessage(): BuilderInterface
    {
        $this->jsonResponse->addData('message', new Message());
        return $this;
    }

    public function getResponse(): Response
    {
        return $this->jsonResponse;
    }
}