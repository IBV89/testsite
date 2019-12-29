<?php

require_once __DIR__ . '/autoload.php';

$gallery = new \Models\Gallery\Gallery();
$data= $gallery->getImages();

$view = new View();
$view->assign('data', $data);

$view->display('gallery.php');