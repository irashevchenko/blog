<?php session_start();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">



<html>
<head> <title>blog</title>
    <link rel="stylesheet" type="text/css" href="style33.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="This is my first blog" />
</head>

<body>

<form name="Control_login" action="microblog.php" method="POST">
    <p>
        <label>Ваш логин:</label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>
    <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password">
        <input type="submit" name="submit" value="Enter">
        <input type="hidden" name=""
    </p>

</form>
</body>
</html>
