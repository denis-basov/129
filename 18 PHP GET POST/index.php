<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <style>
        div{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php if($_SERVER['REQUEST_METHOD'] === 'POST'):?><!--если отправлены данные формы-->
    <!--показываем приветствие-->
	<h2>Привет, <?=$_POST['first_name']?> <?=$_POST['last_name']?></h2>
	<p>Ваш логин: <?=$_POST['login']?>. Ваш емейл: <?=$_POST['email']?>. Ваш пароль: <?=$_POST['password']?></p>
<?php else:?><!--если страница загружена впервые-->
    <!--показываем форму регистрации-->
    <h1>Регистрация</h1>
    <form action="" method="POST">
        <div>
            <label>Имя:</label>
            <input type="text" name="first_name" placeholder="Введите имя">
        </div>

        <div>
            <label>Фамилия:</label>
            <input type="text" name="last_name" placeholder="Введите фамилию">
        </div>

        <div>
            <label>Логин:</label>
            <input type="text" name="login" placeholder="Введите логин">
        </div>

        <div>
            <label>Электронная почта:</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>

        <input type="submit" value="Зарегистрироваться">
    </form>
<?php endif; ?>

</body>
</html>
















