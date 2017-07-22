<?php
foreach(get_class_methods(new ArrayIterator()) as $key=>$method){
	echo $key.' -> '.$method.'<br />';
}
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$object = new ArrayIterator($array);

	$object->rewind();

	while($object->valid()){

		echo $object->key().' -&gt; '.$object->current().'<br />';

		$object->next();
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
	$object = new ArrayIterator($array);

	foreach($object as $key=>$value){
		echo $key.' => '.$value.'<br />';
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
	$object = new ArrayIterator($array);
	if($object->offSetExists(2)){
		echo $object->offSetGet(2);
	}
}catch (Exception $e){
	echo $e->getMessage();
}
*/
?>


<?php
/*
echo '<ul>';
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$object = new ArrayIterator($array);

	if($object->offSetExists(2)){

		$object->offSetSet(2, 'Goanna');
	}

	foreach($object as $key=>$value){

		if($object->offSetGet($key) === 'Джон'){
			$object->offSetUnset($key);
		}
		echo '<li>'.$key.' - '.$value.'</li>'."\n";
	}
}
catch (Exception $e){
	echo $e->getMessage();
}
echo '</ul>';
*/
?>

<?php
/*
$array = array('Вася', 'Петя', 'Иван', 'Маша', 'Джон', 'Даша', 'Наташа', 'Света');

try {
	$object = new ArrayIterator($array);

	foreach($object as $key=>$value){
		echo $value.'<br />';
	}

	$object->rewind();

	echo $object->current();
	echo $object->count();
}catch (Exception $e){
	echo $e->getMessage();
}
*/
?>