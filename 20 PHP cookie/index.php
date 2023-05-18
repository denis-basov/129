<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}



if( isset($_COOKIE['firstName']) ){// если кука установлена
	// 3 выводим приветствие
	echo '<h1>Привет, ' . $_COOKIE['firstName'] . '</h1>';
	echo '<a href="user.php">Личный кабинет</a>';
} else{ // если кука НЕ установлена

	if ('POST' === $_SERVER['REQUEST_METHOD']){ // если отправлена форма
		// 2 работаем с переданными данными
		//echo $_SERVER['REQUEST_METHOD'];
		//d($_POST);

		// удаляем крайние пробелы и экранируем теги
		$firstName = htmlspecialchars( trim($_POST['first_name']) );
		// echo '<h1>Привет, ' . $firstName . '</h1>';

		// устанавливаем куки на необходимое время
		setcookie('firstName', $firstName, time() + 60 );

		// перезагружаем страницу
		header('Location: index.php'); // GET
		exit;

	}else{ // страница загружена впервые
		// 1 отображаем форму
		echo <<<_HTML_
    <form method="POST">
        <label>Имя:</label>
        <input type="text" name="first_name" placeholder="Введите имя"><br>

        <input type="submit" value="Войти">
    </form>
_HTML_;

	}

}



?>

<!--&lt;script&gt;-->
<!--    let h1 = document.querySelector('h1');-->
<!--    h1.innerText = 'Hello'-->
<!--&lt;/script&gt;-->

















