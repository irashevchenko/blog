
<?php
require_once ('Menu.php'); ?>

        <?php

if(!isset($_SESSION['update'])) {
    $_SESSION['update'] = "";
} else {?>
<i> <?php echo $_SESSION['update']; ?> </i>
<?php unset($_SESSION['update']);
}



$mysqli = mysqli_connect('localhost', 'root', '', 'blog') or die ("Не могу соединиться");
$query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку
$result_cont=mysqli_query($mysqli, "SELECT * FROM `user`");
$myrow = mysqli_fetch_array($result_cont);

if(isset($_POST['login'])) {
    if(strcmp($myrow['login'],$_POST['login'])==0) {
        $_SESSION['login']=$_POST['login'];
    }
    else {!isset($_SESSION['login']);}
}
if(isset($_POST['password'])) {
    if(strcmp($myrow['password'],$_POST['password'])==0) {
        {$_SESSION['password'] = $_POST['password'];}
    }
    else {!isset($_SESSION['password']);}
}
var_dump($_SESSION['login']);
var_dump($_SESSION['password']);

$quantity = 1;
$show_link = 3;
$sperator = ' ';// разделитель ссылок
if(empty($_GET["page"]))
{$_GET["page"]="1";}
$page=$_GET["page"];

$result1 = "SELECT * FROM microblog";
$result2 = mysqli_query($mysqli,$result1);
$num = mysqli_num_rows($result2);
$pages = ceil($num/$quantity);// количество страниц
if(empty($page) or $page<0) $page=1;
if ($page>$pages) {$page=$pages;}
$first = ($page-1)*$quantity;

$selec = "SELECT data, message, id FROM microblog order by id desc LIMIT $first, $quantity";
    $result = mysqli_query($mysqli, $selec );
$num_result = mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result))

    { ?>
    <table class="micro" width="600" height="60" align="center" valign="top">

       <tr>

            <td colspan="3" class="grey" align="right">
       <?php
        echo $row['data'];
        ?>

            </td>
        </tr>
        <tr>
            <td align="left">  <?php
                echo $row['message'];
                ?> </td>

        </tr>
        <tr>
            <td align="left"> <a class="link" href="#">Добавить коментарий<a> </td>
<?php
    if(isset($_SESSION['password']) &&  isset($_SESSION['login'])) {?>
    <td aligh="left"> <a href="AddBase.php?id=<?php echo $row['id'];?>">Редактировать</a> </td>



    <td align="right">  <a onclick="return confirm('Are you sure you want to delete the record?')" href="del_microblog.php?id=<?php echo $row['id'];?>">Удалить</a> </td>
        <?php } ?>
    </tr>

    </table> <br>
    <hr align="center" width="50%"><?php
    }

//Cтрелки назад
if ($page != 1) {$pervpage = '<a href=microblog.php?page=1>1</a> <a href=microblog.php?page='. ($page - 1) .'><</a> ';}
else {$pervpage = null;}
//Стрелки вперед
if ($page != $pages) {$nextpage = '<a href=microblog.php?page='. ($page + 1) .'>></a> <a href=microblog.php?page=' .$pages. '>'.$pages.'</a>';}
else {$nextpage = null;}
//Находим две ближайшие станицы
for ($j=1;$j<$show_link;$j++){
   if (($page-$j)>0) {$pageleft='<a href=microblog.php?page='.($page-1).'>'.($page-1).'</a>';}
    else {$pageleft=null;}
    if (($page+$j)<=$pages) {$pageright='<a href=microblog.php?page='.($page+1).'>'.($page+1).'</a>';}
    else {$pageright=null;}
}


if ($pages>1)
{
    // Вывод меню
    echo "<h3><br><br>Страница: ".$pervpage.$sperator.$pageleft.$sperator.'<b style=color:red>'.$page.'</b>'.$sperator.$pageright.$sperator.$nextpage."</h3>";
}




mysqli_free_result($result);
mysqli_close($mysqli);
?>



   
    </td> </tr> </table> </div>


 </body>
</html>



