<?php


$user1 = ['userName' => 'Ivan999', 'firstName' => 'Ivan', 'lastName' => 'Ivanov', 'age' => 11];
$keyNew = ['userName' => 'Логин', 'firstName' => 'Имя', 'lastName' => 'Фамилия', 'age' => 'Возраст'];

function tagName($arr1, $arr2, $tag, $tagIn, $class = 'list')
{
	echo "<$tag class='$class'>";

	foreach ($arr1 as $key => $value) {
		echo "<$tagIn>$arr2[$key]: <span>$value</span></$tagIn>";
	}
	echo "</$tag>";
}
$user1Info = tagName($user1, $keyNew, 'div', 'p', 'userInfo');


//function printArr($arr, $tag, $tagIn, $class='list'){
//	echo <<<_HTML_
//		<$tag class="$class">
//			<$tagIn>Логин: $arr[userName]</$tagIn>
//			<$tagIn>Имя: $arr[firstName]</$tagIn>
//			<$tagIn>Фамилия: $arr[lastName]</$tagIn>
//			<$tagIn>Возраст: $arr[age]</$tagIn>
//		</$tag>
//_HTML_;
//
//}
//
//printArr($user1, 'div', 'p', 'userInfo');
