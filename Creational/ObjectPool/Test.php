<?php
/**
 * Created by PhpStorm.
 * User: harmakit
 * Date: 31/10/2018
 * Time: 10:32
 */
namespace Creational\ObjectPool;

use Creational\ObjectPool\ImageProcessor\ImageProcessorPool;

class Test
{
    public static function do()
    {
        $error = false;

        $pool = new ImageProcessorPool();
        $worker1 =  $pool->get();

        print($worker1->run('test.jpg') . PHP_EOL);

        $pool->free($worker1);

        $sameWorker1 = $pool->get();

        if ($worker1 !== $sameWorker1 || 1 !== $pool->count()) {
            $error = true;
            print ('Error: another object in pool!' . PHP_EOL);
        }

        $worker2 = $pool->get();
        print($worker2->run('test.png') . PHP_EOL);


        if ($worker1 === $worker2) {
            $error = true;
            print ('Error: same objects in pool!' . PHP_EOL);
        }


        if (!$error) {
            print ('ObjectPool OK' . PHP_EOL);
        }
    }
}