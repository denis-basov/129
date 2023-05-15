<style>
    .img {
				width: 250px;
				/*height: 250px;*/
		}
    .card {
        background-color: pink;
        width: 500px;
        border: 1px solid black;
        height: 700px;
    }
</style>

<div class="card">

	<?php

	$car = ['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995'];
	echo "<p><strong>Id : </strong>$car[id]</p>";
	echo "<p><strong>Maker : </strong>$car[maker]</p>";
	echo "<p><strong>Model : </strong>$car[model]</p>";
	echo "<p><strong>Made year : </strong> $car[made_year]</p>";
	echo "<img class='img'  alt='ferrari' src='https://sportishka.com/uploads/posts/2022-04/1651213769_14-sportishka-com-p-ferrari-laferrari-mashini-krasivo-foto-16.jpg'>";
	?>

</div>

<?php
$car = [
'id' => 1,
'maker' => 'Ferrari',
'model' => 'F50',
'made_year' => '1995',
'avatar' => 'https://media.istockphoto.com/id/1340269597/photo/classic-vintage-muscle-car.jpg?b=1&s=170667a&w=0&k=20&c=SwvrnaAB9g3QkusqjKpDTuul2jLFs1DlLAqMIILFubs='
];


echo "<img src='$car[avatar]'>";
echo "<h1>Manufacturer: $car[maker]</h1>";
echo "<h2>Model: $car[model]</h2>";
?>