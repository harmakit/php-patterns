<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 31/10/2018
 * Time: 10:21
 */
namespace Creational\ObjectPool\ImageProcessor;

class ImageProcessorPool implements  \Countable
{
    private $occupiedWorkers = [];

    private $freeWorkers = [];

    public function get(): ImageProcessor
    {
        if (count($this->freeWorkers) === 0) {
            $worker = new ImageProcessor();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function free(ImageProcessor $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
