<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фотогаллерея</title>
    <link rel="stylesheet" href="templates/includes/style.css">
</head>
<body>
<?php
include_once __DIR__ . '/includes/header.php';
?>
<h1>Тут можно посмотреть фото</h1>
<div class="container">
    <div class="gallery">
        <?php
        foreach ($this->data['data'] as $k=>$v){
            ?>
            <figure class="item item--<?=$k+1?>">
                <img src="templates/images/<?=$v['title'];?>" class="img" alt="<?=$v['title'];?>">
            </figure>
        <?php
        }
        ?>
    </div>
</div>

</body>
</html>