<?php 

require_once __DIR__.'/vendor/autoload.php';

$imagine = new \Imagine\Gd\Imagine();

$imagine->open('image1.jpg')
        ->thumbnail(new \Imagine\Image\Box(200,200))
        ->save('thumb_image1.jpg');