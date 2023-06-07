<?php
// обработка данных формы

$file = 'text.txt';
file_get_contents($file);
file_put_contents($file, $_POST);

echo json_encode($_POST);
