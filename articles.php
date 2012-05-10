
<?php $script = $_SERVER['SCRIPT_FILENAME'];
require_once 'menu.php'; ?>
<?php
    $articles = array();
    $article1['name'] = 'Пример использования Zend_Aci';
    $article1['date'] = '03/13/12';
    $article1['message'] = 'В статье описан подход реализации ограничения доступа пользователей к ресурсу на простом примере с продуктами и категориями продуктов.';
    $article2['name'] = 'Создание PDF документов средствами Apache FOP и PHP';
    $article2['date'] = '11/15/11';
    $article2['message'] = 'Apache FOP - это утилита, которая умеет создавать PDF, используя особый XML документ XSL-FO, либо еа лету создавать XSL-FO из XSL шаблона и XML данных';
    $articles[] = $article1;
    $articles[] = $article2;
   $menu = array('Микроблог','Статьи','Контакты');


?>

    <!--создаём страничку с статьями-->
    <?php 
    foreach ($articles as $index => $value) {
    ?>
    <table width="600" height="60" align="center" valign="top">
        <tr>
            <td align="left"> <h2> 
            <?php echo $value['name']; ?>
            </h2> </td>
            <td align="right" class="grey">
            <?php echo $value['date'];?>
            </td>
        </tr>
        <tr>
            <td colspan="2"> <p> 
            <?php echo $value['message'];?>
            </p> </td>
        </tr>
        <tr>
            <td></td><td align="right"> <a class="link" href="#"> Хотите знать больше?  </a> </td>
        </tr>
    </table> <br>
        <hr align="center" width="50%"> <?php } ?> </div>
</body>
</html>