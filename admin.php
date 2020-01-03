<?php
session_start();
require_once __DIR__ . '/autoload.php';

$auth = new \Models\Auth\Auth();

$view = new View();

if (isset($_COOKIE['salt']) && password_verify($_SESSION['name'],$_COOKIE['salt'])){

    $about = new \Models\About\About();
    $data = $about->getText();
    $view->assign('data', $data);

    $book = new \Models\Book\Book();
    $guest = $book->getData();
    $view->assign('guest', $guest);


    $view->display('panel.php');

}else{
    $view->display('admin.php');
}