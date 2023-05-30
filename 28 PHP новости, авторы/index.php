<?php
/*
const DB_NAME = 'test';
const DB_HOST = 'localhost';
const DB_LOGIN = 'root';
const DB_PASSWORD = '';

$pdo = new PDO("mysql:dbname=".DB_NAME.";host=".DB_HOST, DB_LOGIN, DB_PASSWORD,
	[
		PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
	]);
//var_dump($pdo);

$phones = ['home' => 458, 'mobile' => 785, 'work' => 774];
$phonesJSON = json_encode($phones);
$query = "INSERT INTO user VALUES(NULL, 'Karlos', '$phonesJSON')";
$pdo->exec($query);
*/
?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главная страница</title>
</head>
<body>
	<h1>Главная страница</h1>
    <a href="news/news.php">Новости</a>
    <a href="news_filter.php">Новости с фильтром</a>
    <!-- news.php - страница просмотра списка новостей -->
    <!-- news_detail.php страница просмотра новости детально -->
</body>
</html>





