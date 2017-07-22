<?php
$os = new SplObjectStorage();

$person = new stdClass();// Стандартный объект
$person->name = "John";
$person->age = "25";

$os->attach($person); //Добавляем объект в storage

foreach ($os as $object){
	print_r($object);
	echo "<br>";
}

$person->name = "Mike"; //Меняем имя
echo str_repeat("-",30)."<br>"; //Просто линия

foreach ($os as $object){
	print_r($object);
	echo "<br>";
}

$person2 = new stdClass();
$person2->name = "Vasya";
$person2->age = "18";

$os->attach($person2);

echo str_repeat("-",30)."<br>";

foreach ($os as $object){
	print_r($object);
	echo "<br>";
}

if($os->contains($person))
	echo "У нас имеется объект person";
else
	echo "У нас нет объекта person";

$os->rewind();
echo "<br>" . $os->current()->name;

$os->detach($person); //Удаляем объект из коллекции

echo "<br>".str_repeat("-",30)."<br>";
foreach ($os as $object){
	print_r($object);
	echo "<br>";
}
?>
<?php
/*
foreach(get_class_methods(SplObjectStorage) as $key=>$method){
	echo $key.' -> '.$method.'<br />';
}
*/
?>