<?php


$user1 = ['userName' => 'Ivan999', 'firstName' => 'Ivan', 'lastName' => 'Ivanov', 'age' => 11];
$keyNew = ['userName' => 'Логин', 'firstName' => 'Имя', 'lastName' => 'Фамилия', 'age' => 'Возраст'];
$translation = ['userName' => 'User name', 'firstName' => 'First name', 'lastName' => 'Last name', 'age' => 'Age'];

function tagName($arr1, $arr2, $tag, $tagIn, $class = 'list')
{
	echo "<$tag class='$class'>";

	foreach ($arr1 as $key => $value) {
		echo "<$tagIn>$arr2[$key]: <span>$value</span></$tagIn>";
	}
	echo "</$tag>";
}
$user1Info = tagName($user1, $keyNew, 'div', 'p', 'userInfo');
$user1Info = tagName($user1, $translation, 'div', 'p', 'userInfo');

