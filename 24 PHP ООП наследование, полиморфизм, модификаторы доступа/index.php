<?php function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// ООП
// класс - чертеж, объект - экземпляр класса
// модификаторы доступа - public, private, protected
// основные принципы: Наследование, инкапсуляция, полиморфизм


/**
 * Class Dogs
 * Родительский класс (суперкласс)
 */
class Dogs{

	// свойства
	protected $name;
	protected $age;
	protected $weight;
	protected $color;

	// методы
	public function __construct($parName, $age, $weight, $color){
		$this->name = $parName;
		$this->age = $age;
		$this->weight = $weight;
		$this->color = $color;
	}

	// метод для получения инфо об объекте
	public function getSummary(){
		echo <<<_HTML_
			<div class="dog">
				<h3>Кличка: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
			</div>
_HTML_;
	}

	public function getBasicInfo(){
		echo <<<_HTML_
			<div class="basic-dog">
				<h3>Кличка: $this->name</h3>
				<p>Цвет шерсти: $this->color</p>
			</div>
_HTML_;
	}


}

// объекты класса Dogs
$bobik = new Dogs('Бобик', 11, 5, 'Рыжий');
$bobik->getSummary();
//$bobik->getBasicInfo();
//d($bobik);
//echo $bobik->name;



/**
 * дочерний класс гончих собак
 */
class RaceDogs extends Dogs{
	private $speed; // уникальное свойство для класса RaceDogs

	// конструктор дочернего класса
	public function __construct($parName, $age, $weight, $color, $speed){
		// вызываем конструктор родительского класса Dogs
		parent::__construct($parName, $age, $weight, $color);
		$this->speed = $speed;
	}

	public function getSummary(){
		echo <<<_HTML_
			<div class="dog">
				<h3>Кличка: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
				<p>Максимальная скорость: $this->speed</p>
			</div>
_HTML_;
	}

	// метод для получения значения клички
	public function getName(){
		echo "<h3>Кличка: $this->name</h3>";
	}
}

$belka = new RaceDogs('Белка', 2, 5, 'Белый', 100);
$belka->getSummary();
//$belka->getName();

//d($belka);


/**
 * дочерний класс выставочных собак
 */
class ExDogs extends Dogs{
	private $breed; // уникальное свойство для класса ExDogs

	// конструктор дочернего класса
	public function __construct($parName, $age, $weight, $color, $breed){
		parent::__construct($parName, $age, $weight, $color);
		$this->breed = $breed;
	}

	public function getSummary(){
		echo <<<_HTML_
			<div class="dog">
				<h3>Кличка: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
				<p>Порода: $this->breed</p>
			</div>
_HTML_;
	}
}

$vasilek = new ExDogs('Василек', 4, 12, 'Коричневый', 'Пудель');
$vasilek->getSummary();
//d($vasilek);














