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
     var_dump($_GET['id']);
     session_start();
     $message = $_POST['message'];
     $_SESSION['message'] = 'Текст сообщения не был введён! Введите его.';


     $mysqli = mysqli_connect("localhost", "root", "", "blog");
   $query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку
    $update = "UPDATE microblog SET `message`= '$message' where `id`='".$_GET['id']."'";

     if ($_GET['id']!='')
     {

         $ups = mysqli_query($mysqli, $update);

         header( "Location:/blog/microblog.php");// но так как в переменной $message пустая ячейка, то сообщение редактируется и ставновится пустым
     }

     elseif ((empty($_GET['id'])) AND($_POST['message']!=""))
     {
         $result = "Insert into microblog (message, data) VALUES ('$message', NOW())";

         mysqli_query($mysqli, $result);
         $result1 = "Select * from microblog";

         mysqli_query($mysqli, $result1);

         header( "Location:/blog/microblog.php");
     }
     else
     {


         header( "Location:/blog/Addbase.php");


     }

     mysqli_close($mysqli);

     ?>
    </body>

</html>