<? 
require "db.php";
session_start();
$id = $_SESSION['user']['id'];
$busket_id = $_POST['busket_id'];
if(isset($_POST['change-true'])) {
    $busket_change_query = mysqli_query($link,"UPDATE busket SET status = 1 WHERE id_busket = '$busket_id'");
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
if(isset($_POST['change-false'])) {
    $busket_change_query = mysqli_query($link,"UPDATE busket SET status = 2 WHERE id_busket = '$busket_id'");
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
