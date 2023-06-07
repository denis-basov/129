<?php
require 'DBConnect.php';// подключаем файл соединения с бд

class News
{
	/**
	 * метод для получения списка новостей
	 * если передан лимит, выбирается ограниченное кол-во новостей
	 * если лимит не передан, выбираются все новости из таблицы
	 */
	public static function getLimitNewsList($limit = 0){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		// если нет лимита, отображаем все новости
		$tail = '';
		if($limit === 0){
			$tail = ";";
		}else{
			$tail = "LIMIT :limit;";
		}

		$query = "SELECT news.id AS news_id, news.title, add_date, text, image, 
				authors.id AS authors_id, first_name, last_name, avatar,
				translation, class_name
				FROM `news`, authors, category 
				WHERE authors.id = author_id
				AND category.id = category_id
				ORDER BY add_date DESC " . $tail;

		if($limit === 0){
			$result = $pdo->query($query);
		}else{
			$result = $pdo->prepare($query);
			$result->bindValue(':limit', $limit, PDO::PARAM_INT);
			$result->execute();
		}

		return $result->fetchAll();
	}


	/**
	 * метод для получения данных об одной новости по ID
	 */
	public static function getNewsItemById($id){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		//	news: id, title, text, add_date, image
		//  authors: id, first_name, last_name, short_info, avatar
		//  category: id, translation, class_name
		$query = "SELECT news.id AS news_id, news.title, text, add_date, image,
							authors.id AS authorId, first_name, last_name, short_info, avatar,
							category.id AS categoryId, translation, class_name
							FROM news, authors, category
							WHERE author_id = authors.id 
							    AND category_id = category.id
									AND news.id = ?;";
		$result =	$pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetch();
	}


	/**
	 * метод для получения ограниченного списка новостей по идентификатору категории
	 * для вывода в сайдбаре
	 */
	public static function getLimitNewsListByCategoryId($category_id, $limit){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "SELECT id, title, add_date, image
							FROM news
							WHERE category_id = :category_id
							ORDER BY add_date DESC
							LIMIT :limit;";

		$result = $pdo->prepare($query);
		$result->bindValue(':category_id', $category_id, PDO::PARAM_INT);
		$result->bindValue(':limit', $limit, PDO::PARAM_INT);
		$result->execute();

		return $result->fetchAll();
	}

	/**
	 * метод для получения количества новостей по каждой категории
	 */
	public static function getNewsCountByCategories(){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "SELECT category_id, translation, COUNT(*) AS count
							FROM news, category 
							WHERE category_id = category.id 
							GROUP BY category_id;";
		return $pdo->query($query)->fetchAll();
	}

}
