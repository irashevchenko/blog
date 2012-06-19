<?php


            session_start();
    $mysqli = mysqli_connect('localhost', 'root', '', 'blog') or die ("Не могу соединиться");
    $query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку
            var_dump($_POST['id']);
$ed = "SELECT * FROM user";
$cop = mysqli_query($mysqli, $ed);
$row = mysqli_fetch_array($cop);
var_dump($row);
var_dump($_SESSION['login']);
var_dump($_POST['log']);
if(isset($_SESSION['login']) AND isset($_SESSION['password']))
{
    if (!empty($_POST['id']))
    {
        if(!empty($_POST['log'])&&!empty($_POST['log'])&&!empty($_POST['log'])&&!empty($_POST['log'])) {
        $upd = "UPDATE user SET `name`='".$_POST['name']."', `surname`='".$_POST['surname']."', `login`= '".$_POST['log']."', `password`='".$_POST['passw']."' where `id`=".$_POST['id']."";
        var_dump($upd);
       exit;


}
    }
}

$ed1 = "SELECT * FROM user";
$cop1 = mysqli_query($mysqli, $ed1);
$row1 = mysqli_fetch_array($cop1);
var_dump($row1);


?>
