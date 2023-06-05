<?php
// контроллер отображения новости детально

require 'models/News.php';

$id = (int)$_GET['id'];

$news_item = News::getNewsItemById($id);

//echo '<h1>Идентификатор новости: ' . $id . '</h1>';

require 'views/news-detail_view.php';