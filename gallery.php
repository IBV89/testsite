<?php

require_once __DIR__ . '/autoload.php';

$gallery = new \Models\Gallery\Gallery();
$data= $gallery->getImages();

include_once __DIR__ . '/templates/gallery.php';