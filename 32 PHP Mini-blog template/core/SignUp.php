<?php


class SignUp
{

	/**
	 * метод для проверки имени
	 */
	private static function validateFirstName($firstName){
		$reg_exp = "/^[а-яё]{2,}$/iu";

		if(strlen($firstName) === 0){// если строка пуста
			return 'Введите имя';
		}elseif (!preg_match($reg_exp, $firstName)){// если строка НЕ соответствует рег выражению
			return 'Имя должно содержать только русские буквы и быть не менее двух букв';
		}
	}

	/**
	 * метод для проверки фамилии
	 */
	private static function validateLastName($lastName){
		$reg_exp = "/^[а-яё]{2,}$/iu";

		if(strlen($lastName) === 0){// если строка пуста
			return 'Введите фамилию';
		}elseif (!preg_match($reg_exp, $lastName)){// если строка НЕ соответствует рег выражению
			return 'Фамилия должна содержать только русские буквы и быть не менее двух букв';
		}
	}

	/**
	 * метод для проверки логина
	 */
	private static function validateLogin($login){
		// только латиница и цифры, первая буква
		$reg_exp = "/^[a-z][a-z0-9]+$/iu";

		if(strlen($login) === 0){
			return 'Введите логин';
		}elseif (!preg_match($reg_exp, $login)){
			return 'Только латиница и цифры, первая буква, не короче двух символов';
		}

		// проверка логина по БД на уникальность
		$rowCount = Users::checkLoginUnique($login);
		if($rowCount > 0){ // если есть строки в бд, то логин занят
			return 'Такой логин уже занят';
		}
	}

	/**
	 * метод для проверка емейла
	 */
	private static function validateEmail($email){
		$reg_exp = "/^.+@.+\..+$/u";

		if(strlen($email) === 0){
			return 'Введите адрес электронной почты';
		}elseif (!preg_match($reg_exp, $email)){
			return 'Адрес электронной почты введен в неверном формате';
		}

		// проверка по бд
		$rowCount = Users::checkEmailUnique($email);
		if($rowCount > 0){ // если есть строки в бд, то емейл уже зарегистрирован
			return 'Такой адрес электронной почты уже зарегистрирован';
		}

	}

	/**
	 * метод для проверки пароля
	 */
	private static function validatePassword($password){
		$reg_exp = "/^.{6,}$/u";

		if(strlen($password) === 0){
			return 'Введите пароль';
		}elseif (!preg_match($reg_exp, $password)){
			return 'Пароль должен состоять не менее чем из шести произвольных символов';
		}
	}

	/**
	 * метод для проверки данных ВСЕЙ формы
	 */
	public static function validateForm(){
//		DBConnect::d($_POST);
//		DBConnect::d($_FILES);

		$errors = [];
		$input = [];

		$input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
		$input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
		$input['login'] = htmlspecialchars(trim($_POST['login']));
		$input['email'] = htmlspecialchars(trim($_POST['email']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));


		/**
		 * проверка данных
		 */
		// проверка имени
		$firstNameError = self::validateFirstName($input['first_name']);
		if($firstNameError){// если ошибка в имени есть
			$errors['first_name'] = $firstNameError;
		}

		// проверка фамилии
		$lastNameError = self::validateLastName($input['last_name']);
		if($lastNameError){
			$errors['last_name'] = $lastNameError;
		}

		// проверка логина
		$loginError = self::validateLogin($input['login']);
		if($loginError){
			$errors['login'] = $loginError;
		}

		// проверка электронной почты
		$emailError = self::validateEmail($input['email']);
		if($emailError){
			$errors['email'] = $emailError;
		}

		// проверка пароля
		$passwordError = self::validatePassword($input['password']);
		if($passwordError){
			$errors['password'] = $passwordError;
		}


//		DBConnect::d($input);
//		DBConnect::d($errors);
		// возвращаем массив с ошибками и данными
		return [$errors, $input];
	}


	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function processForm($input){
		// шифровка пароль
		$input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

		// заглушка для аватарки
		$input['avatar'] = '/template/images/users/default.png';

		// добавить строку в табличку в БД
		Users::addNewUser($input);

		// записать данные в сессию
		session_start();
		$_SESSION['valid_user'] = $input['login'];
		// перенаправить на главную страницу
		header('Location: /');
	}





}