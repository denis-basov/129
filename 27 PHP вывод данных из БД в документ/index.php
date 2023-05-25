<?php


require 'DBConnect.php'; // подключаем класс соединения с бд


$pdo = DBConnect::getConnection(); // получаем объект соединения с БД
// DBConnect::d($pdo);

// текст запроса к БД
$query = "SELECT OFFICE, CITY, REGION, TARGET, SALES
					FROM offices
					ORDER BY SALES DESC;";

// отправляем запрос к БД и сохраняем полученный объект с данными в переменную
$result = $pdo->query($query);
// DBConnect::d($result);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Офисы</title>
	<style>
		.offices{
				max-width: 1200px;
				margin: auto;
				display: flex;
				flex-wrap: wrap;
				justify-content: space-around;
				gap: 20px;
				padding: 15px;
				background: lightskyblue;
		}
		.office{
				background: lightgray;
				padding: 15px;
		}
	</style>
</head>
<body>
	<nav>
		<a href="/">Главная</a>
		<a href="salesreps.php">Сотрудники</a>
	</nav>
	<div class="offices">
		<?php while( $office = $result->fetch() ):?>
			<div class="office">
				<h1>Идентификатор офиса: <?=$office['OFFICE']?></h1>
				<p>Город: <?=$office['CITY']?></p>
				<p>Регион: <?=$office['REGION']?></p>
				<p>План продаж: <?=$office['TARGET']?></p>
				<p>Продажи: <?=$office['SALES']?></p>
			</div>
		<?php endwhile;?>
	</div>
</body>
</html>



