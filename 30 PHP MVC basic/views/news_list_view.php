<?php
require 'components/header.php';
?>


<div class="news">

	<!-- вывод новостей в цикле в документ	-->
	<?php foreach( $news_list as $news_item ):?>
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

<?php
require 'components/footer.php';
?>