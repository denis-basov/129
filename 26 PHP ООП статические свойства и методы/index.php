<?php function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// ООП
// класс - чертеж, объект - экземпляр класса
// модификаторы доступа - public, private, protected
// основные принципы: Наследование, инкапсуляция, полиморфизм
// Абстрактный класс - класс, объект которого нельзя создать

// Статические свойства и методы - можно вызвать в контексте класса
// -> вызов в контексте объекта $newsItem->printItem();
// :: вызов в контексте класса ScienceNews::printItem($newsItem)

require 'DBConnect.php';

echo DBConnect::$dbName;
echo DBConnect::$dbHost;
echo DBConnect::$dbLogin;
echo DBConnect::$dbPassword;