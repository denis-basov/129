<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

/*
class Fruits{
	public $kind;
	public $weight;
	public $price;

	public function __construct($parKind, $parWeight, $parPrice) {
		$this->kind = $parKind;
		$this->weight = $parWeight;
		$this->price = $parPrice;
	}

	public function getPrice() {
		echo "<p>Наименование: $this->kind</p><p>Вес: $this->weight грамм</p><p>Цена: $this->price руб.</p>";
	}
}

class Berries extends Fruits{
	public $bone;

	public function __construct($parKind, $parWeight, $parPrice, $parBone) {
		$this->kind = $parKind;
		$this->weight = $parWeight;
		$this->price = $parPrice;
		$this->bone = $parBone;
	}
}
$cherry = new Berries('вишня', '100', '300', 'Есть');
d($cherry);
$cherry->getPrice();*/


/*
class Sofa{
	public $color;
	public $model;
	public $weight;
}

class Sofas extends Sofa{
	public $soft;

	public function __construct($color, $model, $weight, $soft){
		$this->color = $color;
		$this->model = $model;
		$this->weight = $weight;
		$this->soft = $soft;
	}
}

$Sofa1 = new Sofas('brown','elegant','10000','soft');
d($Sofa1);*/
/*
class Cars
{
	public $color;
	public $model;
	public $weight;

	public function __construct($color, $model, $weight)
	{
		$this->color = $color;
		$this->model = $model;
		$this->weight = $weight;
	}

	public function getSummary()
	{
		echo <<<_HTML_
			<div class="car">
			<h3>Марка: $this->color</h3>
			<p>Модель: $this->model</p>
			<p>Вес: $this->weight кг</p>
			</div>
_HTML_;

	}
}

$car1 = new Cars('Red', '2101', '1200');
$car1->getSummary();


class SportCars extends Cars{
	public $speed;

	public function __construct($color, $model, $weight, $speed){
		$this->color = $color;
		$this->model = $model;
		$this->weight = $weight;
		$this->speed = $speed;
	}

	public function getSummary()
	{
		echo <<<_HTML_
			<div class="car">
			<h3>Марка: $this->color</h3>
			<p>Модель: $this->model</p>
			<p>Вес: $this->weight кг</p>
			<p>Скорость: $this->speed км/ч</p>
			</div>
_HTML_;

	}
}

$ferrari = new SportCars('Красный', 'F500', '2000', '450');
$ferrari->getSummary();*/


class Books
{
	public $title;
	public $author;
	public $publisher;
	public $publish_date;
	public $language;

	public function __construct($title, $author, $publisher, $publish_date, $language) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->publish_date = $publish_date;
		$this->language = $language;
	}
}

class PrintedBook extends Books {
	public $pages;

	public function __construct($title, $author, $publisher, $publish_date, $language, $pages) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->publish_date = $publish_date;
		$this->language = $language;
		$this->pages = $pages;
	}

	public function getInfo()
	{
		echo "<table border=1><tr><th>Title</th><th>Author</th><th>Publisher</th>
<th>Publish Date</th><th>Language</th><th>Pages</th></tr><tr><td>$this->title</td><td>$this->author</td>
<td>$this->publisher</td><td>$this->publish_date</td><td>$this->language</td><td>$this->pages</td></tr>
</table>";
	}
}

$book = new PrintedBook('The Colour of Magic', 'Terry Pratchett', "St. Martin's Press", '1983', ' english', '205');

$book->getInfo();


class eBook extends Books {
	public $size;

	public function __construct($title, $author, $publisher, $publish_date, $size) {
		$this->title = $title;
		$this->author = $author;
		$this->publisher = $publisher;
		$this->publish_date = $publish_date;
		$this->size = $size;
	}
}
