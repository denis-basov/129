<?php
// контроллер страницы регистрации

require 'models/Users.php';
require 'core/SignUp.php';

//DBConnect::d($_POST);
//DBConnect::d($_FILES);

// обработка формы регистрации
if($_SERVER['REQUEST_METHOD'] === 'POST'){ // если отправлена форма
	// проверяем данные
	SignUp::validateForm();
		// если есть ошибки
			// показываем форму снова
		// если ошибок нет
			// записываем данные в БД
} else{// если форма загружена впервые
	// отображаем форму
}



require 'views/registration_view.php';