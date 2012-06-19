<?php
session_start();
unset($_SESSION['password']);
unset($_SESSION['login']);

exit("<html><head><meta    http-equiv='Refresh' content='0;    URL=microblog.php'></head></html>");
// отправляем пользователя на главную страницу.
?>