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


		DBConnect::d($input);
		DBConnect::d($errors);
		// возвращаем массив с ошибками и данными
		return [$errors, $input];
	}
}