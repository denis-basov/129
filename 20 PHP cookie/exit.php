<?php

// удаляем куки
setcookie('firstName', '', time() - 60 );

// перенаправляем клиента на главную страницу
header('Location: /');
exit;