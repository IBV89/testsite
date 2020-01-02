<?php
session_start();
require_once __DIR__ . '/../autoload.php';

if (isset($_COOKIE['salt']) && password_verify($_SESSION['name'],$_COOKIE['salt'])){
    if (isset($_POST['change'])){
        $change = $_POST['change'];
        $about = new \Models\About\About();
        $about->updateText($change);

        header('Location: ../admin.php');
    }



} else{
    header('Location: ../index.php');
}

