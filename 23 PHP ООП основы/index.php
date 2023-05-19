<?php function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// ООП
// класс - чертеж, объект - экземпляр класса
// модификаторы доступа - public, private, protected

/**
 * класс Cars
 */
class Cars{

	// свойства класса (переменные)
	private $color;
	private $model;
	private $weight;

	// методы класса - функции, объявленные в классе
	public function __construct($parColor, $parModel, $parWeight){ // вызывается автоматом при создании объекта
		//echo "<h2>$parColor, $parModel, $parWeight</h2>";
		$this->color = $parColor;
		$this->model = $parModel;
		$this->weight = $parWeight;
	}

	public function getInfo(){
		echo "<h2>Color: $this->color. Model: $this->model. Weight: $this->weight.</h2>";
	}

	// метод для установки значения свойства $color
	public function setColor($color){
		if (!empty($color)){ // если значение передано
			$this->color = $color; // записываем в свойство
		}
	}

	public function getColor(){
		return $this->color;
	}
}

// создаем объект (экземпляр) класса Cars
$car1 = new Cars('Red', '2101', '1200');
$car1->setColor('White');

$car1->getInfo();

//d($car1);


$car2 = new Cars('Silver', 'S500', '1500');
$car2->setColor('Black');
$car2->getInfo();

//d($car2);

