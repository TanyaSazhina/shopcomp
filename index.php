<?php 
require "db.php";
session_start();
$user = $_SESSION['user']['id'];
$user_query = mysqli_query($link,"SELECT * FROM user WHERE id = '$user'");
$catalog = mysqli_query($link,"SELECT * FROM `catalog` WHERE 1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css" />
    <title>Главная</title>

</head>     
<body class="dark:bg-slate-900">
    <? require "header.php"?>
    
    <main>
        <? if(!isset($_SESSION['user'])):?>
        <section id="hero">
            <div class="container">
                <h1 class="dark:text-white pt-24 font-black text-5xl max-w-2xl text-center mx-auto leading-snug lg:text-4xl lg:pt-16 md:text-3xl md:max-w-full sm:pt-10 md:pt-12 sm:text-2xl">Связь с нами</h1>
                <p class="dark:text-gray-500 text-xl tracking-light text-center max-w-full mx-auto mt-[18px] md:text-lg md:mt-4 sm:mt-2 sm:text-base">Что бы связятьмя с нами и начать рботать<br>    Вам необходимо зарегистрироваться</p>
                <div class="flex justify-center gap-7 sm:flex-col sm:gap-0 sm:mt-4">
                    <a href="signup.php" class="inline-block mt-6 py-[10px] px-8 shadow-custopred bg-lightred rounded-2xl text-white text-xl tracking-tight sm:text-center sm:mt-4 sm:text-base">Регистрация</a>
                    <a href="authorization.php" class="dark:text-white inline-block mt-6 py-[10px] px-8 rounded-2xl text-lightred text-xl tracking-tight border-[2px] border-lightred sm:text-center sm:mt-4 sm:text-base ">Авторизация</a>
                </div>
            </div>
        </section>
        <? endif ?>
        <section id="about">
            <div class="container">
                <div class="flex justify-between mt-40 pb-32 lg:flex-col lg:mt-32 lg:pb-24">
                    <div class="flex flex-col w-1/2 lg:w-full">
                        <div class="text-darkred font-bold text-xl tracking-tight">О нас</div>
                        <h2 class="mt-[2px] text-4xl font-balck lg:text-3xl sm:text-2xl dark:text-white">Команда, стоящая за брендом.</h2>
                        <p class="mt-[10px] max-w-sm text-lg lg:max-w-full sm:text-base dark:text-gray-500">Proin elementum fermentum auctor. Nulla semper, est eget congue pellentesque, erat nulla molestie mi, in finibus leo nisl ac lectus. Praesent non urna. Nulla congue porta lectus in laoreet. Aenean pellentesque vitae metus id porttitor.t</p>
                        <a href="#" class="btn sm:max-w-full sm:text-center sm:text-base dark:text-white">Узнать больше</a>
                    </div>
                    <div class="flex flex-col w-[450px] lg:w-full lg:mt-6">
                        <img src="./img/about.jpg">
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="catalog__goods__right">
               
                <? while($catalog_query = mysqli_fetch_assoc($catalog)) { ?>
                    <form action="addBusket.php" method="POST">
                    <input type="hidden" value="<?= $catalog_query['catalog_id'] ?>" name="id">
                    <div class="grid-catalog mr-10 w- p-6 bg-white rounded-xl shadow-xl hover:shadow-2xl hover:scale-105 transition-all transform duration-500 md:mb-10" >
                        <div class="grid-catalog__img">
                            <img src="img/<?= $catalog_query['catalog_img']?>" alt="" id="grid-catalog" class="w-64 object-cover rounded-t-md">
                        </div>
                        <div class="grid-catalog-middle ">
                            <div class="grid-catalog__h2 ">
                                <h3 class="text-2xl font-bold text-gray-700"><?= $catalog_query['catalog_name']?></h3>
                                <p class="text-sm mt-2 text-gray-700 catalog_desc"><?= $catalog_query['catalog_desc']?></p>
                            </div>
                           
                        </div>
                        <div class="grid-catalog-bottom">
                            <div class="grid-catalog__button-busket">
                                <button id="btn-basket" name="add_busket" data-id="<?= $catalog_query['catalog_id']?>" class="addBasket text-lg block font-semibold py-2 px-6 text-green-100 hover:text-white bg-green-400 rounded-lg shadow hover:shadow-md transition duration-300">
                                    Buy
                                </button>
                            </div>
                            <div class="grid-catalog__p-count">
                                <p><?= $catalog_query['catalog_cost']?>Р</p>
                            </div>
                        </div>
                    </div>
                    </form>
                <?  }  ?>
               
            </div>
        </div>    
    </main>
<? require "footer.php" ?>
   
    <button id="mode" class="btn fixed right-2 bottom-2 text-sm">mode</button>
    <script src="./js/main.js"></script>
</body>         
</html>