<?php
require 'DBConnect.php';// подключаем файл соединения с бд


class Users
{
	/**
	 * метод проверки логина по БД на уникальность при регистрации
	 */
	public static function checkLoginUnique($login){
		$pdo = DBConnect::getConnection(); // подключаемся к бд
		//echo 'Check';
		// ivan111
		$query = "SELECT login
							FROM users
							WHERE login = ?";
		$result =	$pdo->prepare($query);
		$result->execute([$login]);

		return $result->rowCount();
	}

	/**
	 * метод проверки логина по БД на уникальность при регистрации
	 */
	public static function checkEmailUnique($email){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "SELECT email
							FROM users
							WHERE email = ?";

		$result =	$pdo->prepare($query);
		$result->execute([$email]);

		return $result->rowCount();
	}

	/**
	 * метод для добавления нового юзера в табличку
	 */
	public static function addNewUser($user){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "INSERT INTO users (login, first_name, last_name, email, password, image)
							VALUES(?, ?, ?, ?, ?, ?)";

		$result =	$pdo->prepare($query);
		$result->execute([$user['login'], $user['first_name'], $user['last_name'],
										 $user['email'], $user['password'], $user['avatar']]);

	}
}