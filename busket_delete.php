<?php
require "db.php";
session_start();
$id = $_SESSION['user']['id'];
$basket = $_POST["busket_id"];

$delete = mysqli_query($link,"DELETE FROM busket WHERE id_busket = '$basket'");
header("Location: " . $_SERVER['HTTP_REFERER']);