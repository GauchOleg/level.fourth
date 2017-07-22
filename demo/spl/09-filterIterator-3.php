<?php
foreach( get_class_methods(FilterIterator) as $methodName){
	echo $methodName.'<br />';
}
?>

<?php
/*
$letters = array('a', 'b', 'c', 'e', 'f', 'LETTER'=>'g', 'h', 'i');

class MyIterator extends FilterIterator{

	public function __construct( Iterator $it ){
		parent::__construct( $it );
	}

	//Проверяем, ключ - число?
	function accept(){
		return is_numeric($this->key());
	}

}
$result = new MyIterator(new ArrayIterator($letters));

foreach($result as $key=>$value){
	echo $key.' == '.$value.'<br>';
}
*/
?>