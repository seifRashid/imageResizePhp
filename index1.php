<?php

require_once __DIR__ . '/vendor/autoload.php';


class imageResize
{
        public $imagine;

        public function __construct()
        {
                $this->imagine = new \Imagine\Gd\Imagine();
        }

        public function resizeAllImages($dir)
        {
                $files = scandir($dir);

                foreach ($files as $key => $value) {
                        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
                        if (!is_dir($path)) {
                                $ext = pathinfo($path, PATHINFO_EXTENSION);
                                if (in_array($ext, ['jpg', 'png', 'jpeg'])) {
                                        $this->imagine->open($path)
                                                ->thumbnail(new \Imagine\Image\Box(200, 200))
                                                ->save($path);
                                }
                        } else if ($value != '.' && $value != '..') {
                                $this->resizeAllImages($path);

                        }

                }
        }
}

$resizer = new imageResize();
$resizer->resizeAllImages('dir1');