<?php
session_start();





$mysqli = mysqli_connect('localhost', 'root', '', 'blog') or die ("Не могу соединиться");
$query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку

if(isset($_SESSION['login']) AND isset($_SESSION['password']))
{
    if (empty($_POST['id']))
    {
        $ins = "Insert into microblog (message, data) VALUES ('".$_POST['mess']."', NOW())";
        $result = mysqli_query($mysqli, $ins);


        header( "Location:/blog/microblog.php");
    }
    else
    {
        $update = "UPDATE microblog SET `message`= '".$_POST['mess']."' where `id`='".$_POST['id']."'";
        mysqli_query($mysqli,$update);
        header( "Location:/blog/microblog.php");

    }
$post = (trim($_POST['mess']));
if (empty($post)) {
    echo '$';
    $_SESSION['message'] = 'Текст сообщения не был введён! Введите его.';
    header ("Location:/blog/AddBase.php");
}
}
else
{
    header("Location:/blog/Control_form.php");
}

mysqli_close($mysqli);

$_SESSION['update'] = 'Сообщение сохранено';

?>