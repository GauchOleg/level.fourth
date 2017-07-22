<?php
class DVD{
	protected $_id;
	protected $_title;
	protected $_band;
	protected $_tracks = array();
	protected $_db;
	
	function __construct($id=0){
		$this->_id = $id;
		$db = new DB();
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
	public function getXML($id){
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
	
	/* Записываем коллекцию треков в файл. Просто для демонстрации */
	function __destruct(){
		if($this->_tracks){
			file_put_contents(__DIR__.'\tracks.log', time().'|'.serialize($this->_tracks)."\n", FILE_APPEND);
		}
	}
}
?>