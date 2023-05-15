<?php
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
	<title>Document</title>
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
		<?php
			foreach ($cars as $key => $car){
				echo "<div class='car car-" . ($key+1) . "'>";
					echo "<h2>Производитель: $car[maker], Марка: $car[model]</h2>";
					echo "<p>Год выпуска: $car[made_year]</p>";
					echo "<p>Максимальная скорость: $car[top_speed] км/ч</p>";
					echo "<p>Разгон до 100 км/ч: $car[acceleration_to_100] с</p>";
					echo "<p>Мощность: $car[power] л/с</p>";
					echo "<p>Масса: $car[weight] кг</p>";
				echo "</div>";
			}
		?>
	</div>
</body>
</html>
