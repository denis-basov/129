<?php
// массивы
function d($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$numbers = [1, 2, 3, 4, 5, 6];
$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$arr = [1, 4, 'hello', true, false, null, [3,4,5]];
$user = ['name' => 'Ivan', 'avto' => 'Ford', 'age' => 30];
$hobby = ['Лепка','Рисование','Танцы','Спорт','Путешествия'];

$user = [
	'userName' => 'Ivan999',
	'firstName' => 'Ivan',
	'lastName' => 'Ivanov',
	'age' => 11,
	'phones' => ['911', '01', '9874', [34, 356]],
];

$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];

// while
/*
$i = 0;
while($i < 10){
	echo "<h3>Переменная: $i</h3>";
	$i++;
}*/

// for
/*
for($i = 0; $i < 10; $i++){
	echo "<h3>Переменная: $i</h3>";
}*/

/*
// посчитать сумму чисел от 10 до 50
$sum = 0; // 10 + 11 + 12 + 13 + 14 ... 49 + 50
for($i = 10; $i <= 50; $i++){
	$sum += $i;
	//$sum = $sum + $i;
}
echo $sum;*/

// foreach
//foreach ($numbers as $num){
//	echo $num . '<br>';
//}

//foreach ($days as $day){
//	echo '<h3>' . $day . '</h3>';
//}

//foreach ($user as $userInfo){
//	echo '<h3>' . $userInfo . '</h3>';
//}

//foreach ($hobby as $value){
//	echo '<h3>' . $value . '</h3>';
//}
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
					background: skyblue;
					margin: 10px;
			}
		</style>
	</head>
	<body>
        <div class="cars">
            <?php
            foreach ($cars as $key => $value){
                //echo $key . '<br>';
                //	echo '<h3>Производитель: ' . $value['maker'] . '</h3>';
                //	echo '<h3>Модель: ' . $value['model'] . '</h3>';
                echo '<div class="car">';
                foreach ($value as $carKey => $carValue){
                    echo "<h4>$carKey: $carValue</h4>";
                }
                echo '</div>';
            }?>
        </div>
        <div class="users" id="users">

        </div>

    <script src="script.js"></script>
	</body>
	</html>




