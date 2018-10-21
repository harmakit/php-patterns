<?php
namespace Creational\Builder;

use Creational\Builder\Response\JSONResponse;
use Creational\Builder\Response\PDFResponse;
use Creational\Builder\ResponseBuilder\JSONResponseBuilder;
use Creational\Builder\ResponseBuilder\PDFResponseBuilder;

/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 12/10/2018
 * Time: 11:42
 */

class Test {

    public static function do() {
        $responseManager = new ResponseManager();
        $pdfBuilder = new PDFResponseBuilder();
        $jsonBuilder = new JSONResponseBuilder();

        $pdfResponse = $responseManager->build($pdfBuilder);
        $jsonResponse = $responseManager->build($jsonBuilder);

        if ($pdfResponse instanceof PDFResponse) {
            print('PDFBuilder OK' . PHP_EOL);
        }
        if ($jsonResponse instanceof JSONResponse) {
            print('JSONBuilder OK' . PHP_EOL);
        }
    }
}
