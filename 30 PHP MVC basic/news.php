<?php
// контроллер страницы со списком новостей

// подключаем модель News, которая работает с новостями в БД
require 'models/News.php';

$news_list = News::getNewsList();
//DBConnect::d($news_list);

$title = 'Новости';

// подключаем шаблон для отображения страницы с новостями
require 'views/news_list_view.php';