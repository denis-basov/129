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
				authors.id AS author_id, first_name, last_name, avatar 
				FROM `news`, authors 
				WHERE authors.id = author_id
				ORDER BY add_date DESC
				LIMIT 6;";
		return $pdo->query($query)->fetchAll();
	}
}