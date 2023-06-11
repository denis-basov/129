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
	 * метод для проверки аватарки
	 */
	private static function validateAvatar($avatar){
		$allowedSize = 2097152;
		$allowedExtensions = ["image/jpeg", "image/jpg", "image/png, image/gif"];

		if($avatar['size'] === 0){ // Если размер 0, значит картинки нет
			return 'Выберите аватар';
		}elseif($avatar['size'] > $allowedSize){ // если больше 2Мб
			return 'Размер Фото должен быть не более 2 Мегабайт';
		}elseif(!in_array( $avatar['type'], $allowedExtensions)){ // Если не картинка
			return 'Только картинки в форматах "jpeg", "jpg", "png", "gif".';
		}
	}



	/**
	 * метод для проверки данных ВСЕЙ формы
	 */
	public static function validateForm(){
		DBConnect::d($_POST);
		DBConnect::d($_FILES);

		$errors = [];
		$input = [];

		$input['first_name'] = htmlspecialchars(trim($_POST['first_name']));
		$input['last_name'] = htmlspecialchars(trim($_POST['last_name']));
		$input['login'] = htmlspecialchars(trim($_POST['login']));
		$input['email'] = htmlspecialchars(trim($_POST['email']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));
		$input['avatar'] = $_FILES['avatar'];


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

		// проверка аватарки
		$avatarError = self::validateAvatar($input['avatar']);
		if($avatarError){
			$errors['avatar'] = $avatarError;
		}

//		DBConnect::d($input);
//		DBConnect::d($errors);
		// возвращаем массив с ошибками и данными
		return [$errors, $input];
	}

	/**
	 * метод для сохранения аватарки при успешной проверке
	 */
	private static function saveAvatar($avatar){
		// создаем путь аватарки с добавлением уникальности
		$avatarPath = 'template/images/users/'.time().'_'.$avatar['size'].'_'.$avatar['name'];

		// перемещаем аватар
		if(!move_uploaded_file($avatar['tmp_name'], $avatarPath)){
			die('Все пропало, шеф');
		}

		// возвращаем путь для сохранения в БД
		return $avatarPath;
	}

	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function processForm($input){
		// шифровка пароля
		$input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);

		// перемещаем аватар
		$input['avatar'] = self::saveAvatar($input['avatar']);

		// добавить строку в табличку в БД
		$input['user_id'] = Users::addNewUser($input);

		// записать данные в сессию
		session_start();
		$_SESSION['user_id'] = $input['user_id'];
		$_SESSION['valid_user'] = $input['login'];
		// перенаправить на главную страницу
		header('Location: /');
	}



}