<?php
    $nav = require 'components/menu.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title ?? 'ООО Рога и Копыта';?></title>
	<link rel="stylesheet" href="style/style.css">
    <script defer src="script/script.js"></script>
</head>
<body>
<header>
	<h1><?= $head1 ?? 'Шапка сайта';?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, velit.</p>
	<nav>
        <?php
            foreach ($nav as $link => $desc){
                echo "<a href='$link'>$desc</a>";
            }
        ?>
	</nav>
</header>
