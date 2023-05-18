<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Личный кабинет пользователя</title>
</head>
<body>
    <?php if(isset($_COOKIE['firstName'])):?>
        <h2>Личный кабинет пользователя</h2>
        <p>Добро пожаловать, <?php echo $_COOKIE['firstName'];?></p>
        <a href="/">Главная</a>
        <a href="exit.php">Выход</a>
    <?php else:?>
        <h2>Страница доступна только авторизованным пользователям</h2>
        <a href="/">Главная</a>
    <?php endif;?>
</body>
</html>
