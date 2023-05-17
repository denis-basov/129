<?php
// отображение авто детально
$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
//echo '<h2>' . $_GET['id'] . '</h2>'; // 1,2,3

$carId = (int)$_GET['id'];

if(!$carId){// если 0,
 exit('<h1>Неверный ID</h1>'); // то прерываем вывод данных и выводим сообщение
}
$car = $cars[$carId - 1];

/*
 * // более универсальный код для случаев пропусков в id в массиве
$id = (int)$_GET['id'];
$car = '';

foreach($cars as $value) {
	if ($value['id'] == $id) {
		$car = $value;
	}
}*/

/**
 * поиск по массиву
 * in_array($cars, $carId)
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
      .car{
          max-width: 500px;
          padding: 15px;
          background: lightgray;
          border-radius: 10px;
      }
      .car h2{
          color: brown;
      }
      .car p{
          padding-bottom: 20px;
      }
	</style>
</head>
<body>
	<div class="car">
		<h2>Производитель: <?= $car['maker']?>, Марка: <?= $car['model']?></h2>
		<p>Год выпуска: <?= $car['made_year']?></p>
		<p>Максимальная скорость: <?= $car['top_speed']?> км/ч</p>
		<p>Разгон до 100 км/ч: <?= $car['acceleration_to_100']?> с</p>
		<p>Мощность: <?= $car['power']?> л/с</p>
		<p>Масса: <?= $car['weight']?> кг</p>
	</div>
    <a href="/">К списку авто</a>
</body>
</html>
