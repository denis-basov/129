<?php
// контроллер страницы регистрации

require 'models/Users.php';
require 'core/SignUp.php';

//DBConnect::d($_POST);
//DBConnect::d($_FILES);

// обработка формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){ // если отправлена форма
	// проверяем данные
	list($errors, $input) = SignUp::validateForm();

	DBConnect::d($input);
	DBConnect::d($errors);

	if($errors){// если есть хотя бы один элемент в массиве с ошибками
		// показываем форму снова и отображаем ошибки
		require 'views/registration_view.php';
	}else{// если ошибок нет
		// записываем данные в БД
		echo 'Ура!!!';
		SignUp::processForm($input);
	}

} else{// если форма загружена впервые
	$input = [];
	$errors = [];
	// отображаем форму
	require 'views/registration_view.php';
}



