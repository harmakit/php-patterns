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
use Creational\Builder\Response\PDFResponse;
use Creational\Builder\Response\Response;

class PDFResponseBuilder implements BuilderInterface
{
    /**
     * @var PDFResponse
     */
    private $pdfResponse;

    public function createResponse(): Response
    {
        $this->pdfResponse = new PDFResponse();
        return $this->pdfResponse;
    }

    public function addHeader(): Response
    {
        $this->pdfResponse->addData('header', new Header());
        return $this->pdfResponse;
    }

    public function addHTTPCode(): Response
    {
        $this->pdfResponse->addData('HTTPcode', new HTTPCode());
        return $this->pdfResponse;
    }

    public function addMessage(): Response
    {
        $this->pdfResponse->addData('message', new Message());
        return $this->pdfResponse;
    }

    public function getResponse(): Response
    {
        return $this->pdfResponse;
    }
}