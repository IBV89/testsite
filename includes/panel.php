<?php
session_start();
require_once __DIR__ . '/../autoload.php';

if (isset($_COOKIE['salt']) && password_verify($_SESSION['name'],$_COOKIE['salt'])){
    if (isset($_POST['change'])){
        $change = $_POST['change'];
        $about = new \Models\About\About();
        $about->updateText($change);
        unset($_POST['change']);
        header('Location: ../admin.php');
    }
    if (isset($_POST['goimg'])){
        if (isset($_FILES['myimg'])){
            if ($_FILES['myimg']['error'] == 0) {
                move_uploaded_file(
                    $_FILES['myimg']['tmp_name'],
                    __DIR__ . '/../templates/images/' . $_FILES['myimg']['name']
                );

                $img = new \Models\Gallery\Gallery();
                $img->upload($_FILES['myimg']['name']);
                unset($_POST['goimg']);
                header('Location: ../admin.php');
            }
        }
    }
    if (isset($_POST['delete'])) {
        $book = new \Models\Book\Book();
        $guest = [];
        foreach ($_POST['book'] as $k=>$v) {
            $guest[] = $v;
            $book->delete($v);
        }
        header('Location: ../admin.php');
    }



} else{
    header('Location: ../index.php');
}

