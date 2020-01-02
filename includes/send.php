<?php
session_start();
require_once __DIR__ . '/../autoload.php';

$login = $_POST['user'];
$pass = $_POST['pass'];

$auth = new \Models\Auth\Auth();
if ($auth->verify($login, $pass)){
    $_SESSION['name'] = $login;
    setcookie('salt', password_hash($login, PASSWORD_DEFAULT), time()+3600, '/');
    header('Location: ../admin.php');
} else{
    header('Location: ../index.php');
}
