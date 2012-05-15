
<?php
require_once ('Menu.php'); ?>

    <!--создаём страничку с микроблогами-->

    <?php
    $mysqli = mysqli_connect("localhost", "root", "", "blog");


$query = mysqli_query($mysqli, "SET NAMES 'utf8'"); //Задаем кодировку

    $result = mysqli_query($mysqli, "SELECT data, message FROM microblog");

    while($row = mysqli_fetch_assoc($result))




    { ?>
    <table class="micro" width="600" height="60" align="center" valign="top">

       <tr>

            <td class="grey" align="right">
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
            <td align="left"> <a class="link" href="#"> Добавить коментарий <a> </td>
        </tr>
    </table> <br>
    <hr align="center" width="50%"><?php
    } mysqli_free_result($result);
mysqli_close($mysqli);?>

   
    </td> </tr> </table> </div>


 </body>
</html>



