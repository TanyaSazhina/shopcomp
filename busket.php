<?
require "db.php";
session_start();
$id = $_SESSION['user']['id'];
$user_query = mysqli_query($link,"SELECT * FROM user WHERE id = '$id'");
$user = mysqli_fetch_assoc($user_query);
$busket_query = mysqli_query($link,"SELECT * FROM busket INNER JOIN user ON busket.id_user = user.id INNER JOIN catalog ON catalog.catalog_id = busket.id_tovar WHERE id_user = '$id' ORDER BY id_busket DESC");
?>

<!-- INNER JOIN `catalog` ON 'busket.id_tovar' = 'catalog.catalog_id' 
INNER JOIN `user` ON 'busket.id_user' = 'user.id' -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Корзина</title>
</head>
<body>
    <? require "header.php"?>
<section class="busket">
    <div class="container">

    <div class="busket_name">
        <h1 align="center">Корзина пользователя <?=$user['login']?></h1>
    </div>
        <div class="main-basket-left-block">
       <? while($busket = mysqli_fetch_assoc($busket_query)) : ?>
     
            <div class="main-basket-left-item">
            <form action="busket_delete.php" method="POST">
                <input type="hidden" name="busket_id" value="<?= $busket['id_busket'] ?> ">
                <div class="main-basket-left-item__img">
                    <img src="img/<?=$busket['catalog_img'] ?>" alt="" id="basket-item">
                </div>
                <div class="main-basket-left-item__h3">
                    <h3><?=$busket['catalog_name'] ?></h3>
                </div>
                <div class="main-basket-left-item-block-counter">
                    <div class="main-basket-left-item-count">
                        <p><?=$busket['catalog_cost'] ?> Р</p>
                        <? if ($busket['status'] == 0) :?>
                            <font color="blue">
                        <p>В обработке</p>
                        </font>
                        <? endif ?>
                        <? if ($busket['status'] == 1) :?>
                            <font color="green">
                        <p>Готово</p>
                        </font>
                        <? endif ?>
                        <? if ($busket['status'] == 2) :?>
                            <font color="red">
                        <p>Отказано</p>
                        </font>
                        <? endif ?>
                    </div>
                </div>
                <div class="main-basket-left-item-delete">
                    <div class="main-basket-left-item-delete__button">
                        <button id="busket-delete">
                            Удалить товар
                        </button>
                    </div>
                </div>
            </div>
       </form>
            <? endwhile ?>
          
        </div>
    </div>
</section>
<? require"footer.php" ?>
</body>
</html>