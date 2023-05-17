<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// http://localhost/ ? first_name=ирина & last_name=иванова
// http://localhost/ ? first_name=вася & last_name=иванов
// http://localhost/ ? first_name= & last_name=

d($_GET);

echo "<h2>Привет, $_GET[first_name] $_GET[last_name]</h2>";
echo "<p>Ваш логин: $_GET[login]. Ваш емейл: $_GET[email]. Ваш пароль: $_GET[password]</p>";
