<?php
require_once __DIR__ . '/../autoload.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $book = new \Models\Book\Book();
    $book->add($name, $text);
    header('Location: ../book.php');
}