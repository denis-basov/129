<?php
//echo '<pre>';
//print_r($GLOBALS);
//echo '</pre>';

    // phpinfo();

    $userName = 'Ivan';
    $birthYear = 2000;
    $isAdmin = true;
    $age = 0;

    $fruit = 'Морковка';

    //$title = 'My first PHP page';

    $animal1 = 'dog';
    $animal2 = 'cat';
    $animal3 = 'horse';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'title' ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <header>
        <div class="logo">LOGO</div>
        <a href="string.php">строки</a>
    </header>
    <h1>Hello, <?= $userName;?>, админ: <?php echo $isAdmin ? "Да" : "Нет"?>, возраст: <?php echo 2023 - $birthYear;
    ?></h1>
    <?php
		echo "$fruit are mine " . ($isAdmin ? 'да' : 'нет') . " возраст: ". 2023 - $birthYear;
        //echo '<h1>Hello, ' . $userName . '</h1>';
    ?>
    <footer>
        <ul>
			<?php
			echo "
                <li>$animal1</li>
                <li>$animal2</li>
                <li>$animal3</li>
                ";
			?>
        </ul>
    </footer>
    <?php
        echo "<script>console.log('hello')</script>";
    ?>
</body>

</html>