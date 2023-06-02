<?php
require 'components/header.php';
?>

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

<?php
require 'components/footer.php';
?>