<?php
class myFilter extends FilterIterator {
	public function accept() {
		return ($this->current() > 3);
	}
}
$arr = new ArrayIterator(array(1,2,3,4,5,6));
$iterator = new myFilter($arr);
print_r(iterator_to_array($iterator));
?>