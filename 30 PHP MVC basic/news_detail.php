<?php
// контроллер страницы детального просмотра новости

// получаем ID
$id = (int)$_GET['id'];

// подключаем модель News, которая работает с новостями в БД
require 'models/News.php';
$news_data = News::getNewsItemById($id);
//DBConnect::d($news_data);

// запрос на получение нескольких новостей категории текущей новости
$category_news = News::getLimitNewsListByCategory($news_data['category']);

/**
 * заменяем переносы строк \r\n\r\n на параграфы
 * <p>Вольфф говорил \r\n\r\n о задачах на этап… \r\n\r\n Тото Вольфф: «Уик-энд в Баку \r\n\r\n был сложным для нас</p>
 *
 * <p>Вольфф говорил </p><p> о задачах на этап…</p><p> Тото Вольфф: «Уик-энд в Баку</p><p> был сложным для нас</p>
 */
$news_data['full_text'] = str_replace("\r\n", '</p><p>', $news_data['full_text']);

/**
 * $news_data['category'] - строка с категорией текущей новости (ScienceNews)
 * запрос на получение нескольких новостей категории текущей новости
 */
$query = "SELECT id, title, short_text, news_image
            FROM news
            WHERE category = '$news_data[category]'
            ORDER BY add_date DESC
            LIMIT 3";

$result = $pdo->query($query);
$category_news = $result->fetchAll();
//DBConnect::d( $category_news );

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
        .news .full_text p{
            padding-bottom: 10px;
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
                <a href="author_detail.php?author_id=<?=$news_data['author_id']?>">
<!--            <a href="author_detail.php?author_id=2">-->
                    <p><?=$news_data['first_name']?> <?=$news_data['last_name']?></p>
                </a>
                <p>Возраст: <?=$news_data['age']?></p>
                <p>Страна проживания: <?=$news_data['country']?></p>
            </div>
            <div class="category_news">
                <!-- блок отображения новостей категории основной новости  -->
                <h2>Новости категории <?=$news_data['category']?></h2>
                <?php foreach($category_news as $news_item):?>
                    <div class="category_news_item">
                        <img src="../<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
                        <h4><?=$news_item['title']?></h4>
                        <p><?=$news_item['short_text']?></p>
                        <a href="news_detail.php?id=<?=$news_item['id']?>">Подробнее...</a>
                    </div>
                <?php endforeach;?>
            </div>

        </div>
    </div>
</body>
</html>