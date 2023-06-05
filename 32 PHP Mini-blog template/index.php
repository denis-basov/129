<?php
// контроллер главной страницы

require 'models/News.php';

$limit = 6;
$title = 'Главная страница';

$news_list = News::getLimitNewsList($limit);
// DBConnect::d($news_list);

require 'views/index_view.php';

