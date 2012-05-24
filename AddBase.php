<?php
session_start();

$mysqli = mysqli_connect('localhost', 'root', '', 'blog') or die ("Не могу соединиться");
$query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку


if (!isset($_GET['id'])) {
    $message ="";
    $id="";
}
else {
    $sel = "SELECT * FROM microblog where `id`='".$_GET['id']."'";
    $res = mysqli_query($mysqli, $sel);
    $row = mysqli_fetch_assoc($res);
    $message = $row['message'];
    $id = $row['id'];

    var_dump($id);
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">



<html>
<head> <title>blog</title>
    <link rel="stylesheet" type="text/css" href="style33.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="This is my first blog" />
</head>

<body>
<?php
if(!isset($_SESSION['message'])) {
    $_SESSION['message'] = "";
} else {?>
<i> <?php echo $_SESSION['message']; ?> </i>
    <?php unset($_SESSION['message']);
}
?>

<form name="Add_message" action="Forma_add.php" method="POST">
    <table>
        <tr>
            <td> Введите текст сообщения: </td>
        </tr>
        <tr> <td>
            <textarea name="mess" row="50" col="50"><?php echo "$message" ;?></textarea>
        </td> </tr>
        <tr> <td>
    </table>
    <input type="hidden" name="id" value="<?php echo $id ;?>" >
    <input type="submit" name="send" value="send">
    </td> </tr>

</form>


</body>
</html>

