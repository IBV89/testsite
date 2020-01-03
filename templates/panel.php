<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админ панель</title>
    <link rel="stylesheet" href="templates/includes/style3.css">
</head>
<body>
<?php include_once __DIR__ . '/includes/header.php'; ?>
<div class="about menu">
    <p class="name">Обо мне</p>
    <form action="includes/panel.php" method="post">
        <textarea name="change">
            <?= $this->data['data']['text'];?>
        </textarea>
        <button name="changeButton">Редактировать</button>
    </form>
</div>
<div class="img menu">
    <p class="name">Загрузка фото</p>
    <form action="includes/panel.php" enctype="multipart/form-data" method="post">
        <input type="file" name="myimg">
        <input type="submit" name="goimg" value="go">
    </form>
</div>
<div class="book menu">
    <p class="name">Гостевая книга</p>
    <form action="includes/panel.php" method="post">
        <?php
        foreach ($this->data['guest'] as $k=>$v) {
            ?>
            <p><?=$v['id'] . '. ' . $v['name'];?> : <?=$v['text'];?> <input type="checkbox" name="book[]" value="<?=$v['id'];?>"></p>
        <?php
        }
        ?>
        <input type="submit" name="delete" value="Удалить">
    </form>
</div>

</body>
</html>