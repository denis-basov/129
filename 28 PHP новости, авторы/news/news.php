<?php
// страница просмотра списка новостей

require '../DBConnect.php'; // подключаем класс соединения с бд
$pdo = DBConnect::getConnection(); // получаем объект соединения с БД
//DBConnect::d($pdo);

// запрос к бд на получение данных о новостях и об авторах
$query = "SELECT news.`id` AS news_id, `category`, `title`, `short_text`, `news_image`, `add_date`, 
          authors.id AS author_id, first_name, last_name 
					FROM `news`, authors 
					WHERE authors.id = author_id
					ORDER BY add_date DESC;";
$result = $pdo->query($query); // подготавливает и выполняет запрос к БД
// DBConnect::d( $result->fetchAll() );
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Новости</title>
	<style>
      .news{
          max-width: 1200px;
          background: aliceblue;
          margin: auto;
          padding: 30px;
      }
      .news_item{
          margin: 100px 0;
          background: #ddf1ff;
          padding: 30px;
          border-radius: 10px;
      }
      .news_item .news_images{
          width: 300px;
          border-radius: 7px;
      }
      .news_item span{
          margin-right: 30px;
      }
      .news_preview{
          display: flex;
          padding: 20px 0;
          justify-content: space-around;
          gap: 20px;
      }
      .news_preview p{
          font-size: 20px;
      }
	</style>
</head>
<body>
	<div class="news">
		<h1>Новости</h1>
		<?php while( $news_item = $result->fetch() ):?>
			<div class="news_item">
				<a href="news_detail.php?id=<?=$news_item['news_id']?>">
					<h2><?=$news_item['title']?> Идентификатор: <?=$news_item['news_id']?></h2>
				</a>
				<div class="news_preview">
					<a href="news_detail.php?id=<?=$news_item['news_id']?>">
						<img class="news_images" src="../<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
					</a>
					<p><?=$news_item['short_text']?></p>
				</div>

				<span>Дата: <?=$news_item['add_date']?></span>
				<a href="author_detail.php?id=<?=$news_item['author_id']?>">
					<span>Автор: <?=$news_item['first_name']?> <?=$news_item['last_name']?></span>
				</a>
				<span>Категория: <?=$news_item['category']?></span>
				<a href="news_detail.php?id=<?=$news_item['news_id']?>" target="_blank">Подробнее...</a>
			</div>
		<?php endwhile;?>
		<a href="/">На главную</a>
	</div>
</body>
</html>
