<?php
require "db.php";
session_start();
$id = $_SESSION['user']['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Добавление товара</title>
</head>
<body>
    <div class="wrapper">
    <? require "header.php" ?>
    
    <div class="admin-block">
    <div class="container">
        <div class="tovar-block">
    <form action="admin_tovar_add_action.php" method="POST">
        <div class="tovar-inner">
        <input type="text" name="name" placeholder="Введите название товара">
<input type="text" name="description" placeholder="Введите описание товара">
<input type="text" name="cost" placeholder="Введите цену товара">
<input type="file" name="img" placeholder="Выберите картинку">
<button name="add_tovar">Добавить товар</button>
        </div>


    </form>
    </div>
    </div>
    </div>
    <? require "footer.php" ?>
    </div>
</body>
</html>