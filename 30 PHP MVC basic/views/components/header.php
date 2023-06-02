<?php
    $menu = require 'menu.php'; // получаем массив с меню

    //DBConnect::d( $_SERVER['REQUEST_URI']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title ?? 'Сайт с новостями';?></title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<!--  Шаблон главной страницы  -->
<header>
	<div class="logo">LOGO</div>
	<h1><?= $title ?? 'Сайт с новостями';?></h1>
	<nav>
        <?php foreach($menu as $key => $value):?>
            <?php
//                echo 'REQUEST_URI';
//                DBConnect::d($_SERVER['REQUEST_URI']);
//                echo '<hr>';
//                echo '$key';
//                DBConnect::d(strval($key));
//                echo '<h4>Конец итерации</h4>';
            ?>
            <?php if($_SERVER['REQUEST_URI'] === $key):?>
                <span><?=$value?></span>
            <?php else:?>
                <a href="<?=$key?>"><?=$value?></a>
            <?php endif;?>
        <?php endforeach;?>
	</nav>
</header>
