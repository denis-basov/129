<?php function d($arr)
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// ООП
// класс - чертеж, объект - экземпляр класса
// модификаторы доступа - public, private, protected
// основные принципы: Наследование, инкапсуляция, полиморфизм
// Абстрактный класс - класс, объект которого нельзя создать
$publications = [
	['id' => 1, 'category' => 'SportNews', 'title' => 'Леклеру и Ferrari необходимо проявить характер', 'short_text' => 'Неудачи в нескольких гонках подряд сильно осложнили задачу Шарлю Леклеру и Ferrari, хотя ещё относительно недавно итальянская команда лидировала в обоих зачётах чемпионата', 'add_date' => '2022-06-16 16:36:48'],
	['id' => 2, 'category' => 'SportNews', 'title' => 'Гонка в Мельбурне останется в календаре до 2035 года', 'short_text' => 'Гран При Австралии будет по-прежнему проводиться в Мельбурне как минимум до 2035 года', 'add_date' => '2022-06-16 16:39:19'],
	['id' => 3, 'category' => 'SpaceNews', 'title' => 'Настало время искать околоземные астероиды в направлении Солнца', 'short_text' => 'Скотт Шеппард (Scott Sheppard), астроном из Института астрономии Гавайского университета опубликовал заметку в журнале Science, из которой следует, что сейчас научному сообществу самое время обратить пристальное внимание на околоземные объекты...', 'add_date' => '2022-07-23 18:31:50'],
	['id' => 4, 'category' => 'SpaceNews', 'title' => 'Обнаружено «недостающее звено» теории эволюции галактик', 'short_text' => 'Студентка бакалавриата Массачусетского университета в Амхерсте, США, внесла значительный вклад в развитие представлений о механизме роста звезд и черных дыр, установив характер связи между этими двумя процессами.', 'add_date' => '2022-07-23 18:49:23'],
	['id' => 5, 'category' => 'ScienceNews', 'title' => 'Патология «яйцо в яйце» впервые найдена у нептичьего динозавра', 'short_text' => 'Во время каждого сезона размножения гигантские длинношеие динозавры-зауроподы откладывали тысячи яиц, и часть из них наверняка была с серьезными отклонениями, препятствующими вылуплению детеныша', 'add_date' => '2022-07-24 18:01:48'],
	['id' => 6, 'category' => 'ScienceNews', 'title' => 'Экосистемы современного типа сформировались в триасовом периоде', 'short_text' => 'Пермо-триасовое вымирание было самым жестоким из постигших земную жизнь вымираний за всю ее долгую историю: по некоторым оценкам всего за несколько десятков тысяч лет вымерло 57% семейств и более 80% родов позвоночных.', 'add_date' => '2022-07-24 18:07:41'],
];

/**
 * Class Publications
 * абстрактный класс, экземпляр которого не создается
 */
abstract class Publications
{
	public $id;
	public $category;
	public $title;
	public $short_text;
	public $add_date;

	public function __construct($row)
	{
		$this->id = $row['id']; // 1
		$this->category = $row['category'];
		$this->title = $row['title'];
		$this->short_text = $row['short_text'];
		$this->add_date = $row['add_date'];
		//d($row);
	}

	// абстрактный метод - метод, который должен быть реализован в дочерних классах
	abstract public function printItem();
}


/**
 * дочерний класс категории новостей - SportNews
 */
class SportNews extends Publications
{

	public function printItem()
	{
		echo <<<_HTML_
			<div class="news sport-news">
				<h2>$this->title</h2>
				<p>$this->short_text</p>
			</div>
_HTML_;
	}
}
//$news1 = new SportNews($publications[0]);
//$news1->printItem();

/**
 * дочерний класс категории новостей - SpaceNews
 */
class SpaceNews extends Publications
{
	public function printItem()
	{
		echo <<<_HTML_
			<div class="news space-news">
				<h2>$this->title</h2>
			</div>
_HTML_;
	}
}
//$news2 = new SpaceNews($publications[2]);

/**
 * дочерний класс категории новостей - ScienceNews
 */
class ScienceNews extends Publications
{
	public function printItem()
	{
		echo <<<_HTML_
			<div class="news science-news">
				<h2>$this->title</h2>
				<p>ID: $this->id</p>
				<p>$this->short_text</p>
				<p>$this->category</p>
				<p>$this->add_date</p>
			</div>
_HTML_;
	}
}
//$news3 = new ScienceNews($publications[5]);


/**
 * дочерний класс категории новостей - CultureNews
 */
class CultureNews extends Publications
{
	public function printItem()
	{
	}
}

?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		.news {
			background: lightskyblue;
			padding: 20px;
			margin: 20px;
			width: 1000px;
			border-radius: 10px;
		}

		.space-news {
			color: brown;
			border: 3px solid #f9b1b1;
			width: 800px;
		}

		.sport-news {
			color: white;
		}
	</style>
</head>

<body>
	<div class="news-list">
		<?php

		foreach ($publications as $newsItem) {
			// создаем из массива (строки из бд) объект класса в соответствии категории новости
			//				if($newsItem['category'] === 'SportNews'){ // если новости спорта
			//					$newsItem = new SportNews($newsItem);
			//				}elseif($newsItem['category'] === 'SpaceNews'){
			//					$newsItem = new SpaceNews($newsItem);
			//				}elseif($newsItem['category'] === 'ScienceNews'){
			//					$newsItem = new ScienceNews($newsItem);
			//				}
			$newsItem = new $newsItem['category']($newsItem);
			$newsItem->printItem();
		}
		?>
	</div>
</body>

</html>