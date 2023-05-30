<?php

/**
 *  1. CREATE - создание таблицы, добавление данных (INSERT)
 *  2. READ - выборка (SELECT) данных из БД и отображение
 *  3. UPDATE - обновление данных в БД
 *  4. DELETE - удаление данных из БД
 *  CRUD
 */

require 'DBConnect.php';
$pdo = DBConnect::getConnection();
echo '<h1>$_POST</h1>';
DBConnect::d($_POST);
echo '<h1>$_FILES</h1>';
DBConnect::d($_FILES);
echo '$_GET';
DBConnect::d($_GET);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с сотрудниками</title>
    <style>
        .container{
            display: flex;
            margin: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }
        .box{
            border: 3px solid skyblue;
            border-radius: 7px;
            padding: 10px;
            width: 200px;
        }

        .box span{
            color: brown;
        }

        .box img{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Работа с сотрудниками</h1>
    <?php
		/**
		 * создаем таблицу для хранения данных
         * id, first_name, last_name, login, email, password, avatar
		 */
        $query = "CREATE TABLE IF NOT EXISTS users(
                    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    first_name VARCHAR(255) NOT NULL,
                    last_name VARCHAR(255) NOT NULL,
                    login VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL,
                    password VARCHAR(255) NOT NULL,
                    avatar TEXT NOT NULL
                );";
		$pdo->exec($query);

		/**
		 * 2. Если нажата ссылка <a href='?add'>Добавить нового пользователя</a>
         * показываем форму для заполнения
         * id, first_name, last_name, login, email, password, avatar
		 */
		if(isset($_GET['add'])){
            echo <<<_HTML
                <h2>Добавление нового пользователя</h2>   
                <form method="POST" enctype="multipart/form-data">
                    <label>Имя:</label>
                    <input type="text" name="first_name"><br>
                    
                    <label>Фамилия:</label>
                    <input type="text" name="last_name"><br>

                    <label>Логин:</label>
                    <input type="text" name="login"><br>
                    
                    <label>Электронная почта:</label>
                    <input type="email" name="email"><br>
                    
                    <label>Пароль:</label>
                    <input type="password" name="password"><br>
                    
                    <label>Аватар:</label>
                    <input type="file" name="avatar"><br>  
                    
                    <input type="submit" name="action" value="Создать">                                                
                </form>
_HTML;

        }

		/**
		 * 3. Если нажата кнопка name="action" value="Создать"
         * обрабатываем введенные данные
		 */
		if( isset($_POST['action']) && $_POST['action'] === 'Создать' ){

		    // получаем данные о картинке
            $avatar = $_FILES['avatar']; // массив

            // проверка на пустые поля
            if( !empty($_POST['first_name']) &&
                !empty($_POST['last_name']) &&
                !empty($_POST['login']) &&
                !empty($_POST['email']) &&
                !empty($_POST['password']) &&
                $avatar['size'] !== 0 )
            { // если НЕ пусто, продолжаем
                // экранируем, переносим картинку в папку, заносим данные в БД
            }else{ // если хоть одно поле не заполнено, ошибка.
                echo "<h3>Вы не заполнили все поля</h3>";
            }
        }







		/**
		 * выводим список пользователей в документ
		 */
		$query = "SELECT id, first_name, last_name, login, email, password, avatar
		            FROM users
		            ORDER BY first_name;";
        $result = $pdo->query($query);

        echo "<h2>Список всех пользователей</h2>";

        // 1. Ссылка на добавление нового пользователя
        echo "<a href='?add'>Добавить нового пользователя</a>";

        // вывод пользователей в документ
        echo "<div class='container'>";
            while( $user = $result->fetch() ){
                echo <<<_HTML_
                    <div class="box">
                        <img src="$user[avatar]" alt="$user[first_name] $user[last_name]">
                        <p>ID: <span>$user[id]</span></p>
                        <p>Имя: <span>$user[first_name]</span></p>
                        <p>Фамилия: <span>$user[last_name]</span></p>
                        <p>Логин: <span>$user[login]</span></p>
                        <p>Электронная почта: <span>$user[email]</span></p>
                        
                        <form method="POST">
                            <input type="hidden" name="id" value="$user[id]">
                            
                            <input type="submit" name="action" value="Изменить">
                            <input type="submit" name="action" value="Удалить">
                        </form>
                    </div>
_HTML_;
            }
        echo "</div>";

    ?>

</body>
</html>