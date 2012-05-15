<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">



<html>
<head>
    <title>blogadd</title>
    <link rel="stylesheet" type="text/css" href="style33.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="This is my first blog" />
</head>
<body>

<?php
echo '<form action="Forma_add.php"  method="post" >';?>
    <p> Ввести сообщение:</p>


    <textarea name="message" cols="45" rows="5" value=""></textarea>




<?php
echo "<input type='submit' name='dobavl' value='Add message'>";

echo '</form>';
?>
<?php session_start();
if(!isset($_SESSION['message'])) {
    $_SESSION['message'] = "";
} else {?>
  <i>  <?php echo $_SESSION['message']; ?> </i>
   <?php unset($_SESSION['message']);
}
?>

</body>
</html>