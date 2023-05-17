<?php
// отображение списка авто
$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список авто</title>
    <style>
        .cars{
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            background: aliceblue;
            margin: auto;
            padding: 20px;
        }
        .car{
            max-width: 300px;
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
    <div class="cars">
        <?php foreach ($cars as $key => $car):?>
          <div class="car car-<?=$key+1?>">
              <h2>Производитель: <?= $car['maker']?>, Марка: <?= $car['model']?></h2>
              <h3>ID: <?= $car['id']?></h3>
              <a href="car_detail.php?id=<?= $car['id']?>">Подробнее</a>
          </div>
        <?php endforeach;?>
    </div>
</body>
</html>


















