<?php

// ООП
// класс - чертеж, объект - экземпляр класса
// модификаторы доступа - public, private, protected
// основные принципы: Наследование, инкапсуляция, полиморфизм
// Абстрактный класс - класс, объект которого нельзя создать

// Статические свойства и методы - можно вызвать в контексте класса
// -> вызов в контексте объекта $newsItem->printItem();
// :: вызов в контексте класса ScienceNews::printItem($newsItem)

require 'DBConnect.php'; // подключаем класс соединения с бд

//echo DBConnect::$dbName; // обращение к свойствам класса
//echo DBConnect::$dbHost;
//echo DBConnect::$dbLogin;
//echo DBConnect::$dbPassword;
//echo DBConnect::DB_NAME; // обращение к константе класса

$pdo = DBConnect::getConnection(); // получаем объект соединения с БД
DBConnect::d($pdo);