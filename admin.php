<?php
require "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Администрация</title>
</head>
<body>

    <div class="wrapper">
    <? require "header.php" ?>
<section class="admin-block">
    <div class="container">
        <div class="admin-nav__a">
            <a href="admin_busket.php">Посмотреть статусы заказов</a>
            <a href="admin_tovar_add.php">Добавить товар</a>
        </div>
    </div>
</section>
    <? require "footer.php" ?>
    </div>
</body>
</html>