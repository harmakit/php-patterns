<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 31/10/2018
 * Time: 10:21
 */
namespace Creational\ObjectPool\ImageProcessor;

class ImageProcessor
{
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run($image)
    {
        return 'image ' . $image . ' was processed OK';
    }
}