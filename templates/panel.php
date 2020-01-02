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
    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="myimg">
        <input type="button" name="go" value="go">
    </form>
</div>
<div class="book menu">
    <p class="name">Гостевая книга</p>
    <form action="includes/panel.php" method="post">
        <p>Запись гостевой</p>
    </form>
</div>

</body>
</html>