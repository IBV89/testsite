<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обо мне</title>
    <link rel="stylesheet" href="templates/includes/style.css">
</head>
<body>
<?php
include_once __DIR__ . '/includes/header.php';
?>
<div class="about">
    <h1><?=$data['title'];?></h1>
    <p><?=$data['text'];?></p>
</div>
</body>
</html>