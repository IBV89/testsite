<?php
require_once __DIR__ . '/autoload.php';

$book = new \Models\Book\Book();
$data = $book->getData();

$view = new View();
$view->assign('data', $data);

$view->display('book.php');
