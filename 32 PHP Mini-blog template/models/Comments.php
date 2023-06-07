<?php
// модель для работы с комментариями к новостям


class Comments
{
	/**
	 * метод для получения комментариев конкретной новости
	 */
	public static function getCommentsByNewsId($id){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "SELECT `comment`, comments.`add_date`,
							first_name, last_name, image
							FROM `comments`, users
							WHERE user_id = users.id
							AND news_id = ?;";
		$result =	$pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetchAll();
	}

	/**
	 * метод для получения количества комментариев к указанной новости
	 */
	public static function getCountCommentsByNewsId($id){
		$pdo = DBConnect::getConnection(); // подключаемся к бд

		$query = "SELECT COUNT(news_id) AS news_count 
							FROM comments 
							WHERE news_id = ?;";
		$result =	$pdo->prepare($query);
		$result->execute([$id]);

		return $result->fetch()['news_count'];
	}

}