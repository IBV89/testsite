<?php

require __DIR__ . '/autoload.php';

$about = new \Models\About\About();
$data = $about->getText();


include_once __DIR__ . '/templates/about.php';