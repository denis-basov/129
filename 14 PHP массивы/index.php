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

//print_r($_SERVER);
//var_dump($_SERVER);
//d($numbers);
//$numbers[10] = 7;
//$numbers[20] = 8;
//$numbers[] = 9;
//array_unshift($numbers, 10);
//d($numbers);

//echo count($numbers);
// d($user);

$user = [
	'userName' => 'Ivan999',
	'firstName' => 'Ivan',
	'lastName' => 'Ivanov',
	'age' => 11,
	'phones' => ['911', '01', '9874', [34, 356]],
];

//d($user);
//echo $user['userName'];
//echo $user['age'];
//echo $user['phones'][3][1];

//echo count($numbers);
// echo count($hobby);
//echo '<a href="user.php">user.php</a>';

$cars = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];

d($cars);
d($cars[2]['image']);

echo "<img src='{$cars[0]['image']}' alt='{$cars[0]['maker']} {$cars[0]['model']}'>";