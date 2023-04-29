<?php
require "db.php";
session_start();
$id = $_SESSION['user']['id'];
$admin_busket_query = mysqli_query($link,"SELECT * FROM busket INNER JOIN user ON busket.id_user = user.id
INNER JOIN catalog ON busket.id_tovar = catalog.catalog_id  ORDER BY busket.id_busket DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Просмотр заказов</title>
</head>
<body>
    <div class="wrapper">
    <? require "header.php" ?>
    <section class="admin_busket">
        <div class="container">
            <div class="admin-busket-block">
            
                <? while($admin_busket = mysqli_fetch_assoc($admin_busket_query)): ?>
                    
                    <div class="busket-inner">
                    <form action="admin_change.php" method="POST">
                        <input type="hidden" name="busket_id" value="<?=$admin_busket['id_busket'] ?>" >
                    <img src="img/<?=$admin_busket['catalog_img'] ?>" alt="">
                    <div class="admin-name">
                         <p>Покупатель</p> <p><?=$admin_busket['login'] ?></p>
                    </div>
                        <div class="admin-tovar">
                            <p>Товар</p> <p><?=$admin_busket['catalog_name'] ?></p>
                        </div>
                         
                        <p><?=$admin_busket['catalog_cost'] ?>Р</p>  
                        <? if ($admin_busket['status'] == 0 ) : ?>
                            <div class="admin-status">
                                <font color="#ff33" >
                                <h1>В очереди</h1>  
                                </font>
                            </div>
                            <? endif ?>
                            <? if($admin_busket['status'] == 1): ?>
                                <div class="admin-status">
                                <font color="green" >
                                <h1>Принято</h1>  
                                </font>
                            </div>
                        <? endif ?>
                        <? if($admin_busket['status'] == 2): ?>
                                <div class="admin-status">
                                <font color="blue" >
                                <h1>Отказано</h1>  
                                </font>
                            </div>
                        <? endif ?>
                        <div class="button-change">
                            <? if($admin_busket['status'] == 0) : ?>
                        <button name="change-true">Принять</button>
                        <button name="change-false">Отклонить</button>
                        <?endif ?>
                    </div>
                    </form>
                    </div>
                   
                <? endwhile ?>
                       
            </div>
            
        </div>
    </section>
    <? require "footer.php" ?>
    </div>
</body>
</html>