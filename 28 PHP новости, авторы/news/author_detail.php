<?php

require '../DBConnect.php'; // подключаем класс соединения с бд
$pdo = DBConnect::getConnection(); // получаем объект соединения с БД
//DBConnect::d($pdo);

// отображение инфо об авторе по ID
// echo '<h1>Отображение автора по ID: ' . $_GET['author_id'] . '</h1>';
//var_dump($_GET);



//Задание: реализовать скрипт отображения автора новости по ID по аналогии с файлом news_detail.php.

//1. В этом файле мы получили ID автора, его нужно забрать из массива $_GET и положить в переменную.
$author_id = (int)$_GET['author_id'];
//var_dump($author_id);

//2. Далее нужно написать текст запроса к таблице с авторами для получения одного автора по имеющемуся ID.
$query = "SELECT `id`, `first_name`, `last_name`, `age`, `country`, `avatar` 
					FROM `authors` 
					WHERE id = ?;";

//3. Выполнить запрос к БД и получить данные об авторе.
$result = $pdo->prepare($query);// 1. подготавливаем запрос
$result->execute( [$author_id] );// 2. Выполняем запрос к бд  [2]

//4. С помощью fetch() забрать данные из полученного объекта и положить в переменную.
// DBConnect::d( $result->fetch() );
$author = $result->fetch();

// 4.1 Получить все новости данного автора
$query = "SELECT id, title, short_text, news_image
            FROM news
            WHERE  author_id = ?;";

$result = $pdo->prepare($query);// 1. подготавливаем запрос
$result->execute( [$author_id] );// 2. Выполняем запрос к бд  [2]

// массив с новостями текущего автора
$author_news = $result->fetchAll();
//DBConnect::d( $author_news );

//5. Вывести данные из полученного массива в HTML-разметку
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$author['first_name']?> <?=$author['last_name']?></title>
</head>
<body>
	<h1><?=$author['first_name']?> <?=$author['last_name']?></h1>
	<p>Возраст: <?=$author['age']?></p>
	<p>Страна: <?=$author['country']?></p>
	<img src="../<?=$author['avatar']?>" alt="<?=$author['first_name']?> <?=$author['last_name']?>">
</body>
</html>


