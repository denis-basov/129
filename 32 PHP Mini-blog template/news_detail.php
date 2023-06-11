<?php
// контроллер отображения новости детально

require 'models/News.php';
require 'models/Comments.php';

$id = (int)$_GET['id']; // id новости
$limit = 3; // задаем ограничение по кол-ву новостей в сайд-баре

$news_item = News::getNewsItemById($id);// получаем данные о новости по ID
$comments = Comments::getCommentsByNewsId($id);// получаем комментарии текущей новости
$commentsCount = Comments::getCountCommentsByNewsId($id); // получаем кол-во комментариев к новости
$limitNewsListByCategoryId = News::getLimitNewsListByCategoryId($news_item['categoryId'], $limit);
$newsCountByCategories = News::getNewsCountByCategories(); // кол-во новостей по категориям

// меняем \r\n на параграфы
$news_item['text'] = str_replace("\r\n", '</p><p>', $news_item['text']);

//DBConnect::d($newsCountByCategories);

require 'views/news-detail_view.php';