
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
    session_start();
    $mysqli= mysqli_connect("Localhost", "root", "", "blog");
    $query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку
    if ((isset($_SESSION['login'])) AND isset($_SESSION['password'])) {
    $del =  "delete from microblog where `id` = '".$_GET['id']."' ";
    mysqli_query($mysqli, $del);
    header("Location:/blog/microblog.php");}
    else {
        header("Location:/blog/Control_form.php");
    }



    mysqli_close($mysqli);
    ?>
    </body>
    </html>