<?php
$array = array('a', 'b', 'd', 'e', 'f');

$c = 1;
$count = count($array);

foreach($array as $value){
	echo $value;
	if($c < $count){
		echo ',';
		$c++;
	}
}
/*
$object = new CachingIterator(new ArrayIterator($array));
foreach($object as $value){
	echo $value;
	if($object->hasNext()){
		echo ',';
	}
}
*/
/*
class addComma extends CachingIterator{
	function current(){
		if(parent::hasNext()){
			return parent::current().',';
		}else{
			return parent::current();
		}
	}
}
$object = new addComma(new ArrayIterator($array));
foreach($object as $value){
	echo $value;
}
*/
?>