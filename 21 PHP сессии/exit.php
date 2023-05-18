<?php
session_start(); // запускаем сессию

// удаляем переменные сессии
// unset($_SESSION['firstName']);
session_unset();

// перенаправляем клиента на главную страницу
header('Location: /');
exit;