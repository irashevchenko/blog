
<?php session_start();

?>



    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">

    <?php


    $script = $_SERVER['SCRIPT_FILENAME'];
    $script1 = explode("/", $script);

    ?>

    <?php $menus = array();
    $menu1 = array('href'=> 'microblog.php', 'tittle'=> 'Микроблог');


    $menu2= array('href' => 'articles.php','tittle' =>'Статьи');


    $menu3=array('href' => 'contact.php','tittle' => 'Контакты');

    $menus[] = $menu1;
    $menus[] = $menu2;
    $menus[] = $menu3;
    ?>
<html>
<head> <title>blog</title>
    <link rel="stylesheet" type="text/css" href="style33.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="This is my first blog" />
</head>

<body>
    <?php
    $mysqli = mysqli_connect('localhost', 'root', '', 'blog') or die ("Не могу соединиться");
    $query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку
    $result_cont=mysqli_query($mysqli, "SELECT * FROM `user`");
    $myrow = mysqli_fetch_array($result_cont);

if (isset($_SESSION['login']) && isset($_SESSION['password']))
{
 ?> <a onclick="return confirm('Are you sure you want to exit the blog?')" href="exit.php">Выход</a>
<a onclick="return confirm('Are you sure you want to change the login/password?')" href="Change_form.php?id=<?php echo $myrow['id']?>">Изменить логин/пароль</a>
    <?php

} ?>
<div class="box">
    <table class="oglavlenie" width="400" height="60" align="right">
         <tr><?php foreach($menus as $index => $value) {?>
            <td align="left" valign="bottom"> <a href="<?php echo $value['href']?>" title="<?php echo $value['tittle']?>">
<?php if
                (end($script1)==$value['href'])
            { ?> <a> <?php echo $value['tittle'];?> </a> <?php } else {
                  echo $value['tittle']; } ?>   </td>
        <?php }?>
        </tr>
        </table> <br> <br> <br>
        <hr align="center" width="92%">
