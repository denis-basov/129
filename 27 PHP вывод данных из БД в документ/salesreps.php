<?php
require 'DBConnect.php'; // подключаем класс соединения с бд


$pdo = DBConnect::getConnection(); // получаем объект соединения с БД

// текст запроса к БД
$query = "SELECT `EMPL_NUM`, `NAME`, `AGE`, `TITLE`, `HIRE_DATE`, `QUOTA`, `SALES`
					FROM salesreps;";

// отправляем запрос к БД и сохраняем полученный объект с данными в переменную
$result = $pdo->query($query);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сотрудники</title>
	<style>
      .salesreps{
          max-width: 1200px;
          margin: auto;
          display: flex;
          flex-wrap: wrap;
          justify-content: space-around;
          gap: 20px;
          padding: 15px;
          background: lightskyblue;
      }
      .salesrep{
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
	<div class="salesreps">
		<?php while( $salesrep = $result->fetch() ):?>
			<div class="salesrep">
				<h1>Идентификатор сотрудника: <?=$salesrep['EMPL_NUM']?></h1>
				<p>Имя: <?=$salesrep['NAME']?></p>
				<p>Возраст: <?=$salesrep['AGE']?></p>
				<p>Должность: <?=$salesrep['TITLE']?></p>
				<p>Дата найма: <?=$salesrep['HIRE_DATE']?></p>
				<p>План продаж: <?=$salesrep['QUOTA']?></p>
				<p>Продажи: <?=$salesrep['SALES']?></p>
			</div>
		<?php endwhile;?>
	</div>
</body>
</html>

