<?php
// массивы
function d($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

$numbers = [1, 2, 3, 4, 5];
$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$arr = [1, 4, 'hello', true, false, null, [3,4,5]];
$oldUser = ['name' => 'Ivan', 'avto' => 'Ford', 'age' => 30];
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

// функции
//function sayHello(){
//    echo "<h3>Hello</h3>";
//}
//sayHello();


//function sayHello($name){
//	echo "<h3>Hello, $name</h3>";
//}
//sayHello('Ivan');

//function sayHello($name){
//    $str = "<h3>Hello, $name</h3>";
//    echo $str;
//}
//sayHello('Ivan');
//echo $str;

//$name = 'Ivan';
//d($GLOBALS);
//function sayHello(){
//	echo "<h3>Hello, $GLOBALS[name]</h3>";
//}
//sayHello();

//$name = 'Anna';
//function sayHello($name = 'User'){
//	echo "<h3>Hello, $name</h3>";
//}
//sayHello('Ivan');
//sayHello($name);
//sayHello('Bob');
//sayHello();

//function sayHello($name){
//
//    function makeStr($userName){
//    	return "<h3>Hello, $userName</h3>";
//		}
//
//		return makeStr($name);
//
//}
//$res = sayHello('Ivan');
//echo $res;


/*
// $numbers = [1, 2, 3, 4, 5];
$newNums = &$numbers; // создаем новую ссылку на массив

$lastEl = array_pop($newNums); // удаляем последний элемент
$lastEl2 = array_pop($numbers); // удаляем последний элемент

d($numbers);
d($newNums);

echo $lastEl;
echo '<br>';
echo $lastEl2;*/


/*
// формирование списка HTML на основе массива
function makeHTML($arr, $class = 'list', $tag = 'ul'){
	echo "<$tag class='$class'>";
	foreach ($arr as $value){
		echo "<li>$value</li>";
	}
	echo "</$tag>";
}

makeHTML($hobby, 'hobby');
makeHTML($oldUser, 'user', 'ol');
makeHTML($days, 'days');*/

/*
function makeHTML($arr, $class = 'list', $tag = 'ul'){

	$data = "<$tag class='$class'>";
	foreach ($arr as $value){
		$data .= "<li>$value</li>";
	}
	$data .= "</$tag>";

	return $data;
}

$res = makeHTML($days, 'days', 'ol');
echo $res;*/




















