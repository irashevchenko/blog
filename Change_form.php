<?php
session_start();
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
<?php  var_dump($_GET['id']);
if (isset($_GET['id'])) {$id =$_GET['id']; }
var_dump($id);?>

<form name="Changedata" action="Change_data.php" method="POST">
        <p>Введите Ваше имя:</p>
    <input  name="name" type="text" size="25" maxlength="25">
    <p>Введите Вашу фамилию:</p>
    <input  name="surname" type="text" size="25" maxlength="25">
        <p>Ваш логин:</p>
    <input name="log" type="text" size="15" maxlength="15">
    </p>
    <p>Ваш пароль:</p>
        <input name="passw" type="password">
        <p>повторите Ваш пароль:</p>
        <input name="Confirm_passw" type="password">
        <input type="hidden" name="id" value="'<?php echo $id ;?>'">
        <input type="submit" name="submit" value="Enter">
        <input type="hidden" name=""


</form>
</body>
</html>
