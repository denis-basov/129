<?php
// страница просмотра новости детально
//echo '<h1>' . $_GET['id'] . '</h1>';
require '../DBConnect.php'; // подключаем класс соединения с бд
$pdo = DBConnect::getConnection(); // получаем объект соединения с БД
//DBConnect::d($pdo);

// получаем ID
$id = (int)$_GET['id'];

// если в ID передана строка, то присваиваем в ID 1
if($id === 0){
	$id = 1;
}
//echo $id;

//'ivan; delete table users;'

// делаем запрос по ID к бд для получения полной информации о новости
$query = "SELECT news.`id` AS news_id, `category`, `title`, `full_text`, `news_image`, `add_date`, 
          authors.id AS author_id, first_name, last_name, age, country, avatar
					FROM `news`, authors 
					WHERE authors.id = author_id
					AND news.id = ?;";

$result = $pdo->prepare($query);// 1. подготавливаем запрос
$result->execute( [$id] ); // 2. Выполняем запрос к бд  [4]

//DBConnect::d($result->fetch());
$news_data = $result->fetch(); // выбираю данные о новости из объекта

// отображаем
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$news_data['title']?></title>
    <style>
        .news_block{
            max-width: 1200px;
            background: aliceblue;
            margin: auto;
            padding: 20px 40px;
            display: flex;
            gap: 20px;
        }
        .news_block span{
            font-style: italic;
        }
        .news{
            width: 70%;
        }
        .news .full_text{
            font-size: 20px;
        }
        .news img{
            width: 100%;
        }

        .sidebar{
            width: 30%;
            padding: 20px;
        }
        .author{
            border: 3px solid lightskyblue;
            padding: 10px;
        }
        .author img{
            width: 100%;
        }
        .author p{
            margin: 5px 0;
            font-size: 18px;
        }
        .sidebar .category_news{
            margin-top: 50px;
            padding: 30px;
            border-top: 2px solid #eaeaea;
        }
        .sidebar .category_news img{
            width: 100%;
        }
        .category_news .category_news_item{
            margin-top: 50px;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #e4e4fc;
        }
        .category_news .category_news_item h4{
            margin: 0;
            margin-top: 10px;
        }
        .category_news .category_news_item p{
            margin: 0;
            margin-top: 7px;
        }
    </style>
</head>
<body>
	<div class="news_block">
        <div class="news">
            <!-- блок для отображения основной новости -->
            <h1><?=$news_data['title']?></h1>
            <img src="../<?=$news_data['news_image']?>" alt="<?=$news_data['title']?>">
            <p>Категория: <?=$news_data['category']?></p>
            <div class="full_text">
                <p><?=$news_data['full_text']?></p>
            </div>
            <p>Дата публикации: <?=$news_data['add_date']?></p>
            <a href="/">Главная страница</a>
            <a href="news.php">К списку новостей</a>
        </div>
        <div class="sidebar">
            <div class="author">
                <!-- блок отображения автора новости  -->
                <img src="../<?=$news_data['avatar']?>" alt="<?=$news_data['last_name']?>">
                <a href="author_detail.php?id=<?=$news_data['author_id']?>">
                    <p><?=$news_data['first_name']?> <?=$news_data['last_name']?></p>
                </a>
                <p>Возраст: <?=$news_data['age']?></p>
                <p>Страна проживания: <?=$news_data['country']?></p>
            </div>
            <div class="category_news">
                <!-- блок отображения новостей категории основной новости  -->
            </div>
        </div>
    </div>
</body>
</html>
