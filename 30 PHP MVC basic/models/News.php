<?php
require 'DBConnect.php';

class News
{
	/**
	 * метод для получения последних ограниченного списка новостей
	 */
	public static function getLimitNewsList(){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.`id` AS news_id, `category`, `title`, `short_text`, `news_image`, `add_date`, 
				authors.id AS author_id, first_name, last_name 
				FROM `news`, authors 
				WHERE authors.id = author_id
				ORDER BY add_date DESC
				LIMIT 3;";
		return $pdo->query($query)->fetchAll();
	}

	/**
	 * метод для получения всех новостей
	 */
	public static function getNewsList(){
		$pdo = DBConnect::getConnection();

		$query = "SELECT news.`id` AS news_id, `category`, `title`, `short_text`, `news_image`, `add_date`, 
				authors.id AS author_id, first_name, last_name 
				FROM `news`, authors 
				WHERE authors.id = author_id
				ORDER BY add_date DESC;";
		return $pdo->query($query)->fetchAll();
	}


	/**
	 * метод для получения одной новости по ID
	 */
	public static function getNewsItemById($id){
		$pdo = DBConnect::getConnection();

		// делаем запрос по ID к бд для получения полной информации о новости
		$query = "SELECT news.`id` AS news_id, `category`, `title`, `full_text`, `news_image`, `add_date`, 
          authors.id AS author_id, first_name, last_name, age, country, avatar
					FROM `news`, authors 
					WHERE authors.id = author_id
					AND news.id = ?;";

		$result = $pdo->prepare($query);
		$result->execute( [$id] );

		return $result->fetch();
	}


	/**
	 * @param $category - категория текущей новости
	 * @return mixed - двумерный массив с новостями
	 */
	public static function getLimitNewsListByCategory($category){
		$pdo = DBConnect::getConnection();

		$query = "SELECT id, title, short_text, news_image
            FROM news
            WHERE category = '$category'
            ORDER BY add_date DESC
            LIMIT 3";

		return $pdo->query($query)->fetchAll();
	}
}