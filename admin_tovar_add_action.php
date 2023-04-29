<?
require 'db.php';
session_start();
$name = $_POST['name'];
$desc = $_POST['description'];
$cost = $_POST['cost'];
$img = $_POST['img'];
$tovar_add = mysqli_query($link,"INSERT INTO `catalog`(`catalog_name`,`catalog_desc`,`catalog_cost`,`catalog_img`) VALUES ('$name','$desc','$cost','$img')");
header("Location: " . $_SERVER['HTTP_REFERER']);
