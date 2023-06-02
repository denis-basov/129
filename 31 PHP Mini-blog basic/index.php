<?php
// контроллер главной страницы

require 'models/News.php';

$news_list = News::getLimitNewsList();
// DBConnect::d($news_list);



require 'views/index_view.php';

