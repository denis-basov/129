<?php function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

/*
class Cakes{
	public $weight;
	public $color;
	public $taste;
}

$cake1=new Cakes();
$cake1->weight='10';
$cake1->color='white';
$cake1->taste='honey';
d($cake1);

$cake2= new Cakes();
$cake2->weight='15';
$cake2->color='red';
$cake2->taste='pp';
d($cake2);*/

/*
class Drivers{
	public $fullname;
	public $team;
	public $position;
}

$driver1 = new Drivers();
$driver1->fullname = 'Fernando Alonso';
$driver1->team = 'Aston Martin';
$driver1->position = '3';
d($driver1);

$driver2 = new Drivers();
$driver2->fullname = 'Max Verstappen ';
$driver2->team = 'Red Bull';
$driver2->position = '1';
d($driver2);*/

/*
//ТТХ танков
class Tanks { //ТТХ - тактико-техн.хар-ки танков
	public $max_speed; //макс.скорость км/ч
	public $armor; //толщина брони в мм
	public $crew; //экипаж кол-во чел в танке
	public $clearance; //клиренс в мм
}
//ТТХ танка Т-34
$tankT34 = new Tanks();
$tankT34->max_speed = '54km/h';
$tankT34->armor = '45mm';
$tankT34->crew = '4';
$tankT34->clearance = '400mm';

d($tankT34);*/

// task 2
/*
Class Fruits{
	public $kind;
	public $weight;
	public $price;

	public function getPrice() {
		echo "<p>Наименование: $this->kind</p><p>Вес: $this->weight</p><p>Цена: $this->price</p>";
	}
}

$apple = new Fruits();
$apple->kind = 'gold apple';
$apple->weight = '300';
$apple->price = '150';
$apple->getPrice();*/

/*
class Houses{
	public $level;
	public $color;
	public $window;
	public $door;

	public function getInfo(){
		echo "<h2>Level: $this->level . Window: $this->window. Color: $this->color.</h2>";
	}
}

$house1 = new Houses();
$house1->level = '3';
$house1->color = 'orange';
$house1->window = '5';
$house1->door = '2';
$house1->getInfo();

$house2 = new Houses();
$house2->level = '2';
$house2->color = 'blue';
$house2->window = '7';
$house2->door = '1';
$house2->getInfo();*/

/*
class Pastry{
	public $color;
	public $type;
	public $calories;

	public function getPrice(){
		echo "<h1>Color: $this->color. Type: $this->type. Calories: $this->calories.</h1>";
	}
}
$pastry1=new Pastry();
$pastry1->color = 'HotPink';
$pastry1->type = 'croissant';
$pastry1->calories='1000';
$pastry1->getPrice();

$pastry2=new Pastry();
$pastry2->color = 'MediumVioletRed';
$pastry2->type = 'donut';
$pastry2->calories = '1500';
$pastry2->getPrice();*/

// 3
/*
class Books
{
	public function __construct($title, $author, $publisher, $publish_date) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->publish_date = $publish_date;
	}
	public $title;
	public $author;
	public $publisher;
	public $publish_date;

	public function getInfo()
	{
		echo "<table border=1><tr><th>Title</th><th>Author</th><th>Publisher</th><th>Publish Date</th></tr>
<tr><td>$this->title</td><td>$this->author</td><td>$this->publisher</td><td>$this->publish_date</td></tr>
</table>";
	}
}

$book = new Books('Discworld', 'Terry Pratchett', 'Psygnosis', '1995');

$book->getInfo();*/

/*
Class Fruits{
	public $kind;
	public $weight;
	public $price;

	public function __construct($parKind, $parWeight, $parPrice) {
		$this->kind = $parKind;
		$this->weight = $parWeight;
		$this->price = $parPrice;
	}

	public function getPrice() {
		echo "<p>Наименование: $this->kind</p><p>Вес: $this->weight граммов</p><p>Цена: $this->price руб.</p>";
	}
}
$apple = new Fruits('gold apple', '300', '150');
$apple->getPrice();*/

/*
class Fruits{

	// свойства класса (переменные)
	public $name;
	public $size;
	public $country;
	public $color;

	public function __construct($parName, $parSize, $purCountry, $parColor){
		echo "<h2>Название:$parName, Размер: $parSize, Страна $purCountry, Цвет: $parColor</h2>";
		$this->name = $parName;
		$this->size = $parSize;
		$this->country = $purCountry;
		$this->color = $parColor;
	}
}
$fruit1 = new Fruits('apple', 'small', 'RUS', 'red');
$fruit2 = new Fruits('mango', 'small', 'India', 'green');*/