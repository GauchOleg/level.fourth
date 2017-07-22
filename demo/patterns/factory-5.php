<?php
//method
interface Product{
	public function getName();
}
class ProductA implements Product{
	private $name='ProductA';

	public function getName(){
		return $this->name;
	}
} 
class ProductB implements Product{
	private $name='ProductB';

	public function getName(){
		return $this->name;
	}
}

interface Creater{
	public function factoryMethod ();
} 

class CreaterA implements Creater{
	public function factoryMethod(){
		return new ProductA();
	}
}
class CreaterB implements Creater{
	public function factoryMethod(){
		return new ProductB();
	}
}

$creater1= new CreaterA();
$creater2= new CreaterB();
$count=intval($_GET['count']);

if ($count==1) {
	$type=$creater1->factoryMethod();
} else {
	if ($count<=0) {
		die("false");
	} else {
		$type=array();    
		for($i=1;$i<=$count;$i++) {
			$type[]=$creater2->factoryMethod();
		}
	}
}
?>