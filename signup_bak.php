<?php

try{
$link = mysqli_connect('localhost', 'a0742456_root', 'R83QAgKz');
mysqli_select_db($link, 'a0742456_root');
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!$login || !$password){
        $error = 'вы не ввели логин и пароль';
    }
    if(!isset($error)) {
        $query = 'INSERT INTO `a` (`login`, `password`) VALUES ("' . $login . '", "' . $password . '");';
        mysqli_query($link, $query);
        echo 'вы успешно создали пользователя';
    } else { echo $error; exit; }

}
catch(\Exception $e){
    die(var_dump($e));
}
?>
