<!-- компонент с выводом списка новостей -->
<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<h2><?=$news_list_title ?? 'Последние новости';?></h2>
			</div>
		</div>

		<div class="row">
			<!--     PHP      -->
			<?php foreach($news_list as $news_item):?>
				<div class="col-lg-4 mb-4">
					<div class="entry2">
						<a href="news_detail.php?id=<?=$news_item['news_id']?>">
                            <img src="<?=$news_item['image']?>"
                            alt="<?=$news_item['title']?>"
                                         class="img-fluid rounded">
                        </a>
						<div class="excerpt">
                                <span class="post-category text-white <?=$news_item['class_name']?>
                                mb-3"><?=$news_item['translation']?></span>

							<h2><a href="news_detail.php?id=<?=$news_item['news_id']?>"><?=$news_item['title']?></a></h2>
							<div class="post-meta align-items-center text-left clearfix">
								<figure class="author-figure mb-0 mr-3 float-left"><img
										src="<?=$news_item['avatar']?>" alt="Image"
										class="img-fluid"></figure>
								<span class="d-inline-block mt-1">
                                    <a href="#"><?=$news_item['first_name']?>
										<?=$news_item['last_name']?>
                                    </a>
                                </span>
								<span>&nbsp;-&nbsp; <?=$news_item['add_date']?></span>
							</div>

							<p><?=mb_substr($news_item['text'], 0, 200)?>...</p>
							<p><a href="news_detail.php?id=<?=$news_item['news_id']?>">Подробнее...</a></p>
						</div>
					</div>
				</div>
			<?php endforeach;?>
			<!--     PHP      -->
		</div>

	</div>
</div>
