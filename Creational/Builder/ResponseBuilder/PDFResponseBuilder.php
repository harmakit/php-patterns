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
use Creational\Builder\Response\PDFResponse;
use Creational\Builder\Response\Response;


class PDFResponseBuilder implements BuilderInterface
{
    /**
     * @var PDFResponse
     */
    private $pdfResponse;

    public function createResponse(): BuilderInterface
    {
        $this->pdfResponse = new PDFResponse();
        return $this;
    }

    public function addHeader(): BuilderInterface
    {
        $this->pdfResponse->addData('header', new Header());
        return $this;
    }

    public function addHTTPCode(): BuilderInterface
    {
        $this->pdfResponse->addData('HTTPcode', new HTTPCode());
        return $this;
    }

    public function addMessage(): BuilderInterface
    {
        $this->pdfResponse->addData('message', new Message());
        return $this;
    }

    public function getResponse(): Response
    {
        return $this->pdfResponse;
    }
}