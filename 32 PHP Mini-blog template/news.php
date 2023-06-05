<?php
// контроллер страницы с новостями

require 'models/News.php';

$title = 'Новости';
$news_list_title = 'Все новости';

$news_list = News::getLimitNewsList();
// DBConnect::d($news_list);

require 'views/news-list_view.php';