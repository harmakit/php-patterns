<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 11:01
 */

namespace Creational\Builder\ResponseBuilder;


use Creational\Builder\Components\Message;
use Creational\Builder\Response\Components\Header;
use Creational\Builder\Response\Components\HTTPCode;
use Creational\Builder\Response\JSONResponse;
use Creational\Builder\Response\Response;

class JSONResponseBuilder implements BuilderInterface
{

    /**
     * @var JSONResponse
     */
    private $jsonResponse;

    public function createResponse(): Response
    {
        $this->jsonResponse = new JSONResponse();
        return $this->jsonResponse;
    }

    public function addHeader(): Response
    {
        $this->jsonResponse->addData('header', new Header());
        return $this->jsonResponse;
    }

    public function addHTTPCode(): Response
    {
        $this->jsonResponse->addData('HTTPcode', new HTTPCode());
        return $this->jsonResponse;
    }

    public function addMessage(): Response
    {
        $this->jsonResponse->addData('message', new Message());
        return $this->jsonResponse;
    }

    public function getResponse(): Response
    {
        return $this->jsonResponse;
    }
}