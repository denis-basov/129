<?php
$user = [
	'userName' => 'Ivan999',
	'firstName' => 'Ivan',
	'lastName' => 'Ivanov',
	'age' => 11,
	'phones' => ['911', '01', '9874'],
	'avatar' => 'https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60'
];

$car = ['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'photo' => 'https://cdn.ferrari.com/cms/network/media/img/resize/5ddd339c0cf6995f44de9337-ferrari-f50-1995-history-focus-2?'];
// сформируйте из массива разметку и выведите ее в документ
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>User</title>
    <style>
        img{
            width: 200px;
        }
    </style>

</head>
<body>

	<div class="user">
		<?php
			echo '<img src="' . $user['avatar'] . '">';
			echo "<img src='$user[avatar]'>";
			echo "<h3>Логин: $user[userName]</h3>";
			echo "<p>Имя: $user[firstName]</p>";
			echo "<p>Фамилия: $user[lastName]</p>";
			echo "<p>Возраст: $user[age]</p>";
			echo "<p>Телефон: {$user['phones'][0]}</p>";
		?>
	</div>

    <div>
			<?php
			echo "<h3>$car[maker]<h3>";
			echo "<h4>$car[model]</p>";
			echo "<p>$car[made_year]</p>";
			?>
    </div>

    <?php
        echo <<<_HTML
            <img src="$car[photo]">
            <h3>Порядковый номер: $car[id]</h3>
            <p>Марка: $car[maker]</p>
            <p>Модель: $car[model]</p>
            <p>Год выпуска: $car[made_year]</p>
            <ul>
                <li>1</li>
                <li>2</li>
                <li>3</li>
            </ul>
_HTML;

    ?>

    <div class="car">
        <h3>Идентификатор: <span><?php echo $car['id'];?></span></h3>
        <p>Название: <?= $car['maker'];?></p>
        <p>Модель: <?= $car['model'];?></p>
        <p>Год выпуска: <?= $car['made_year'];?></p>
    </div>

</body>
</html>
