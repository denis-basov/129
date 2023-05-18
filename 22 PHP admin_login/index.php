<?php
session_start(); // запускаем сессию

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// тестовые данные для входа
$admin_login = 'admin';
$admin_password = '123456';


if( isset($_SESSION['adminLogin']) ){// если установлена переменная сессии
	// 3 выводим приветствие
	echo '<h1>Привет, ' . $_SESSION['adminLogin'] . '</h1>';
	echo '<a href="user.php">Личный кабинет</a>';
} else{ // если кука НЕ установлена

	if ('POST' === $_SERVER['REQUEST_METHOD']){ // если отправлена форма
		// 2 работаем с переданными данными
		//echo $_SERVER['REQUEST_METHOD'];
		// d($_POST);

		// удаляем пробелы, экранируем теги
		$login = htmlspecialchars( trim($_POST['login']) );
		$password = htmlspecialchars( trim($_POST['password']) );

		// проверяем, верны ли данные
		if($admin_login === $login){ // если логин введен верно
			// проверяем пароль
			if($admin_password === $password){ // если пароль ок
				// устанавливаем данные сессии
				$_SESSION['adminLogin'] = $login;

				// перенаправляем пользователя
				header('Location: /');
				exit;
			}else{ // если пароль не ок
				echo 'Неверный пароль';
			}

		}else{ // если логин введен неверно
			echo 'Неверный логин';
		}

	}else{ // страница загружена впервые
		// 1 отображаем форму
		echo <<<_HTML_
    <form method="POST">
    
        <label>Логин:</label>
        <input type="text" name="login" placeholder="Введите логин"><br>
        
        <label>Пароль:</label>
        <input type="password" name="password" placeholder="Введите пароль"><br>

        <input type="submit" value="Войти">
        
    </form>
_HTML_;

	}

}














