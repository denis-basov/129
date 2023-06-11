<?php

require '../models/DBConnect.php';
require '../models/Comments.php';

print_r($_POST);

$comment = htmlspecialchars(trim($_POST['message']));
$userId = (int)$_POST['user_id'];
$newsId = (int)$_POST['news_id'];

$result = Comments::addNewCommentToNewsItem($comment, $newsId, $userId);

if($result) header("Location: /news_detail.php?id=$newsId");