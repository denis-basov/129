<?php
// контроллер страницы детального просмотра новости

// получаем ID
$id = (int)$_GET['id'];

// подключаем модель News, которая работает с новостями в БД
require 'models/News.php';
$news_data = News::getNewsItemById($id);
// DBConnect::d($news_data);

// запрос на получение нескольких новостей категории текущей новости
$category_news = News::getLimitNewsListByCategory($news_data['category']);
// DBConnect::d( $category_news );

// разбиваем сплошной текст статьи на параграфы
$news_data['full_text'] = str_replace("\r\n", '</p><p>', $news_data['full_text']);

$title = $news_data['title'];

// подключаем шаблон для отображения страницы просмотра новости детально
require 'views/news_detail_view.php';