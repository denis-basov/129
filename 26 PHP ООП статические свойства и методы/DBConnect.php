<?php


/**
 * Class DBConnect
 * класс подключения к БД
 * исп статические свойства и методы - обращение без создания объекта класса
 */
class DBConnect
{
	// статические свойства
	private static $dbName = 'test';
	private static $dbHost = 'localhost';
	private static $dbLogin = 'root';
	private static $dbPassword = '';

	// константы класса
	const DB_NAME = 'test';
	const DB_HOST = 'localhost';
	const DB_LOGIN = 'root';
	const DB_PASSWORD = '';

	// статические методы
	// получаем строку DSN
	private static function getDSN(){
		return "mysql:dbname=".self::DB_NAME.";host=".self::DB_HOST;
	}

	// получаем объект соединения с БД
	public static function getConnection(){
		return new PDO(self::getDSN(), self::DB_LOGIN, self::DB_PASSWORD);
		// return new PDO("mysql:dbname=test;host=localhost", 'root', '123456');
	}

	public static function d($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}

}
