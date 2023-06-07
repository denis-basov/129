<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();


$start = (int)$_GET['start'];
$limit = (int)$_GET['limit'];


$query = "SELECT id, title, image
					FROM news
					ORDER BY add_date DESC
					LIMIT $start, $limit;";

$data = $pdo->query($query)->fetchAll();

// [[id => 1, name => Ivan],[id => 2, name => Irina]]
// [{id: 1, name: Ivan},{id: 2, name: Irina}]

echo json_encode($data);