<?php
// контроллер главной страницы

// подключаем модель News, которая работает с новостями в БД
require 'models/News.php';

// вызываем метод для получения списка новостей
$newsLimitList = News::getLimitNewsList();
//DBConnect::d($newsLimitList);

$title = 'Главная страница';


// подключаем шаблон для отображения главной страницы
require 'views/index_view.php';
