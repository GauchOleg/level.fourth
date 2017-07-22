<?php
foreach(get_class_methods(new ArrayObject()) as $key=>$method){
	echo $key.' -> '.$method.'<br />';
}
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

// create the array object
$arrayObj = new ArrayObject($array);

for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
    echo $iterator->key() . ' => ' . $iterator->current() . '<br />';
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');
$arrayObj = new ArrayObject($array);

//Добавляем новое значение
$arrayObj->append('Ира');

for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
	echo $iterator->key() . ' -> ' . $iterator->current() . '<br />';
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');
$arrayObj = new ArrayObject($array);

//Сортируем по алфавиту
$arrayObj->natcasesort();

for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
	echo $iterator->key() . ' -> ' . $iterator->current() . '<br />';
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');
$arrayObj = new ArrayObject($array);

//Получаем количество элементов массива
echo $arrayObj->count();
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');
$arrayObj = new ArrayObject($array);

//Удаляем пятый элемент массива
$arrayObj->offsetUnset(4);

for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
	echo $iterator->key() . ' -> ' . $iterator->current() . '<br />';
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');
$arrayObj = new ArrayObject($array);

if ($arrayObj->offsetExists(4)){
	//Проверяем, существует ли пятый элемент массива
	echo 'Offset Exists</br />';
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$arrayObj = new ArrayObject($array);

	//Меняем значение пятого элемента массива
	$arrayObj->offsetSet(5, "Игорь");

	for($iterator = $arrayObj->getIterator();$iterator->valid();$iterator->next()){
		echo $iterator->key() . ' -> ' . $iterator->current() . '<br />';
	}

}catch (Exception $e){
	echo $e->getMessage();
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$arrayObj = new ArrayObject($array);

	//Получаем значение пятого элемета массива
	echo $arrayObj->offsetGet(4);
}catch(Exception $e){
	echo $e->getMessage();
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$arrayObj = new ArrayObject($array);

	//Получаем копию массива
	$arrayObjCopy = $arrayObj->getArrayCopy();

	for($iterator = $arrayObjCopy->getIterator();$iterator->valid();$iterator->next()){
		echo $iterator->key() . ' => ' . $iterator->current() . '<br />';
	}
}catch (Exception $e){
	echo $e->getMessage();
}
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$arrayObj = new ArrayObject($array);

	//Создаём новый объект
	$arrayObjCopy = new ArrayObject($arrayObj->getArrayCopy());

	for($iterator = $arrayObjCopy->getIterator();$iterator->valid();$iterator->next()){
		echo $iterator->key() . ' => ' . $iterator->current() . '<br />';
	}
}catch (Exception $e){
	echo $e->getMessage();
}
*/
?>