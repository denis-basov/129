<?php

require '../models/News.php';

$start = (int)$_GET['start'];
$limit = (int)$_GET['limit'];

$data = News::getMoreNews($start, $limit);

echo json_encode($data);