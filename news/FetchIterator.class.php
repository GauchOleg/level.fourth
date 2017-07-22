<?
class FetchIterator implements Iterator{
	/**
	* @var string
	*/
	private $fetchCallback;
	/**
	* номер текущей итерации
	* @var int
	*/
	private $count;
	/**
	* текущее значение
	* @var mixed
	*/
	private $current;

	/**
	* @param string $fetchCallback функция обратного вызова
	*/
	public function __construct($fetchCallback){
		
	}

	/**
	* Возврат значения текущего элемента
	* @link http://php.net/manual/en/iterator.current.php
	* @return mixed Возвращает любой тип
	*/
	public function current(){
		
	}
	public function rewind(){}
	/**
	* Возврат ключа текущего элемента
	* @link http://php.net/manual/en/iterator.key.php
	* @return scalar скалярное значение, либо целое 0
	*/
	public function key(){
		
	}

	/**
	* Проверка текущей позиции
	* @link http://php.net/manual/en/iterator.valid.php
	* @return boolean Возвращаемое значение приводится к булеву типу, далее исполняется
	* Возвращает true или false
	*/
	public function valid(){
		
	}

	/**
	* @return bool
	*/
	private function validate(){
		
	}

	/**
	* Смещаемся на следующий элемент
	* @link http://php.net/manual/en/iterator.next.php
	* @return void Любое возвращаемое значение игнорируется
	*/
	public function next(){
		
	}

	/**
	* Используем функцию обратного вызова
	*/
	public function fetch(){
		
	}
}
?>