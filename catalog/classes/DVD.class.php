<?php

class DVD{
	protected $_id;
	protected $_title;
	protected $_band;
	protected $_tracks = array();
	protected $_db;
	
	function __construct($id=0){
		$this->_id = $id;
		$this->_db = DB::getInstance();
	}
	
	public function setTitle($title){
		$this->_title = $title;
	}
	
	public function setBand($band){
		$this->_band = $band;
	}
	/* Добавление трека в коллекцию для составления антологии исполнителя */
	public function addTrack($track){
		$this->_tracks[] = $track;
	}
	/* Пользователь делает заказ */
	public function buy(){
		$this->_db->updateQuantity($this->_id, -1);
		// Другие действия
	}
	/* Показываем список Исполнитель - Альбом */
	public function showCatalog(){
		$result = $this->_db->selectItems();
		if(is_array($result))
			return $result;
		else
			return 'Не срослось';
	}
	/* 	Показываем список всех треков выбранного исполнителя 
	*	сгруппированных по альбомам
	*/
	public function showBand($band){
		$result = $this->_db->selectItemsByBand($band);
		if(is_array($result))
			return $result;
		else
			return 'Не срослось';
	}
	/* Показываем выбранный альбом со списком треков */
	public function showAlbum($id){
		$result = $this->_db->selectItemsByTitle($id);
		if(is_array($result))
			return $result;
		else
			return 'Не срослось';
	}
	/* Сохранение информации об альбоме в формате XML */
//	public function getXML($id){}
	
	/* Записываем коллекцию треков в файл. Просто для демонстрации */
	function __destruct(){
		if($this->_tracks){
			file_put_contents(__DIR__.'\tracks.log', time().'|'.serialize($this->_tracks)."\n", FILE_APPEND);
		}
	}
}
class BonusDVD extends DVD{

	function __construct($id=0){
		parent::__construct();
		$this->_tracks[] = -1;
	}
}
class DVDFactory{

	public static function create($by){
		$class = ucfirst($by) . 'DVD';
		return new $class;
	}
}
class DVDStrategy{
	private $_strategy;

	public function setStrategy($obj){
		$this->_strategy = $obj;
	}

	public function get(){
		return $this->_strategy->get();
	}

	public function __call($method, $args){
		$this->_strategy->$method($args[0]);
	}
}
interface DVDFormat{
	function get();
}
class DVDAsXML extends DVD implements DVDFormat{
	function get(){
		$doc = new DomDocument('1.0', 'utf-8');
		$doc->formatOutput = true;
		$doc->preserveWhiteSpace = false;
		$root = $doc->createElement('dvd');
		$doc->appendChild($root);
		$band = $doc->createElement('band', $this->_band);
		$root->appendChild($band);
		$title = $doc->createElement('title', $this->_title);
		$root->appendChild($title);

		$tracks = $doc->createElement('tracks');
		$root->appendChild($tracks);
		$result = $this->_db->selectItemsByTitle($id);
		foreach($result as $item){
			$track = $doc->createElement('track', $item['title']);
			$tracks->appendChild($track);
		}
		$file_name = $this->_band.'-'.$this->_title.'.xml';
		file_put_contents('output/'.$file_name, $doc->saveXML());
	}
}
class DVDAsJSON extends DVD implements DVDFormat{
	function get(){
		$doc = array();
		$doc['dvd']['band'] = $this->_band;
		$doc['dvd']['title'] = $this->_title;
		$doc['dvd']['tracks'] = array();
		$result = $this->_db->selectItemsByTitle($this->_id);
		foreach ($result as $item){
			$track = $doc['dvd']['tracks'][]=$item['title'];
		}
		$file_name = $this->_band . '-' . $this->_title . '.json';
		file_put_contents($file_name,json_encode($doc));
	}
}
?>