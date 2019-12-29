<?php

require __DIR__ . '/autoload.php';

$about = new \Models\About\About();
$data = $about->getText();

$view = new View();
$view->assign('data', $data);

$view->display('about.php');