<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
    <link rel="stylesheet" href="templates/includes/style.css">
</head>
<body>
<?php
include_once __DIR__ . '/includes/header.php';
?>
<?php
foreach ($this->data['data'] as $k=>$v){
    ?>
    <p><?=$v['id'] . '. ' .  $v['name'] . ': ' . $v['text']; ?></p><br>
<?php
}
?>

<form action="#" method="post">
    <input type="text" name="text">
    <input type="submit" name="submit">
</form>
</body>
</html>