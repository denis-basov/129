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

//print_r($_SERVER);
//var_dump($_SERVER);
//d($numbers);
//$numbers[10] = 7;
//$numbers[20] = 8;
//$numbers[] = 9;
//array_unshift($numbers, 10);
//d($numbers);

//echo count($numbers);
d($user);
