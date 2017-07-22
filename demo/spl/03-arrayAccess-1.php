<?php
class book implements ArrayAccess{
	public $title;
	public $author;
	public $isbn;

	public function offsetExists($item){
		return isset($this->$item);
	}

	public function offsetSet($item, $value){
		$this->$item = $value;
	}

	public function offsetGet($item){
		return $this->$item;
	}

	public function offsetUnset($item){
		unset($this->$item);
	}
}

$book = new book;
$book['title']= 'PHP 4';
if(isset($book['title'])){
    echo $book['title'];
    unset($book['title']);
}
$book['title']= 'PHP 5';
$book['author'] = 'John Smith';
$book['isbn'] = 1590598199;
print_r($book);
?>