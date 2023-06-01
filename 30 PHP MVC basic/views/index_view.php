<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главная страница</title>
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
<!--  Шаблон главной страницы  -->
<header>
	<div class="logo">LOGO</div>
	<h1>Главная страница</h1>
	<nav>
		<a href="/">Главная</a>
		<a href="news.php">Новости</a>
		<a href="authors.php">Авторы</a>
	</nav>
</header>
<div class="news">

	<!-- вывод новостей в цикле в документ	-->
	<?php foreach( $newsLimitList as $news_item ):?>
		<div class="news_item">
			<a href="news_detail.php?id=<?=$news_item['news_id']?>">
				<h2><?=$news_item['title']?> Идентификатор: <?=$news_item['news_id']?></h2>
			</a>
			<div class="news_preview">
				<a href="news_detail.php?id=<?=$news_item['news_id']?>">
					<img class="news_images" src="<?=$news_item['news_image']?>" alt="<?=$news_item['title']?>">
				</a>
				<p><?=$news_item['short_text']?></p>
			</div>

			<span>Дата: <?=$news_item['add_date']?></span>
			<a href="news/author_detail.php?author_id=<?=$news_item['author_id']?>">
				<span>Автор: <?=$news_item['first_name']?> <?=$news_item['last_name']?></span>
			</a>
			<span>Категория: <?=$news_item['category']?></span>
			<a href="news_detail.php?id=<?=$news_item['news_id']?>" target="_blank">Подробнее...</a>
		</div>
	<?php endforeach;?>
</div>
<footer>
	<h3>Главная страница</h3>
</footer>
</body>
</html>