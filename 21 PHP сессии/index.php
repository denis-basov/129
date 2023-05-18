<?php
session_start(); // запускаем сессию

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}


if( isset($_SESSION['firstName']) ){// если установлена переменная сессии
	// 3 выводим приветствие
	echo '<h1>Привет, ' . $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] . '</h1>';
	echo '<a href="user.php">Личный кабинет</a>';
} else{ // если кука НЕ установлена

	if ('POST' === $_SERVER['REQUEST_METHOD']){ // если отправлена форма
		// 2 работаем с переданными данными
		//echo $_SERVER['REQUEST_METHOD'];
		//d($_POST);

		// удаляем крайние пробелы и экранируем теги
		$firstName = htmlspecialchars( trim($_POST['first_name']) );
		$lastName = htmlspecialchars( trim($_POST['last_name']) );
		// echo '<h1>Привет, ' . $firstName . '</h1>';

		// записываем данные в сессию
		$_SESSION['firstName'] = $firstName;
		$_SESSION['lastName'] = $lastName;

		// перезагружаем страницу
		header('Location: index.php'); // GET
		exit;

	}else{ // страница загружена впервые
		// 1 отображаем форму
		echo <<<_HTML_
    <form method="POST">
        <label>Имя:</label>
        <input type="text" name="first_name" placeholder="Введите имя"><br>
        
        <label>Фамилия:</label>
        <input type="text" name="last_name" placeholder="Введите фамилию"><br>

        <input type="submit" value="Войти">
    </form>
_HTML_;

	}

}


















