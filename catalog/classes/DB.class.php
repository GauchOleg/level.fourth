<?php
class DB{
	const DB_NAME = 'dvd.db';
	protected $_db;
	function __construct(){
		$this->_db = new SQLite3(self::DB_NAME);
	}
	function __destruct(){
		unset($this->_db);
	}
	/* Перегоняем объект в массив для удобства использования */
	protected function db2Arr($data){
		$arr = array();
		while($row = $data->fetchArray(SQLITE3_ASSOC))
			$arr[] = $row;
		return $arr;	
	}
	/* Выборка каталога */
	function selectItems(){
		try{
			$sql = "SELECT id, band, title, quantity FROM catalog";
			$result = $this->_db->query($sql);
			if (!is_object($result)) 
				throw new Exception($this->_db->lastErrorMsg());
			return $this->db2Arr($result);
		}catch(Exception $e){
			return false;
		}	
	}
	/* Выборка треков альбома */
	function selectItemsByTitle($id){
		try{
			$sql = "SELECT tracks.cid as id, tracks.title as title
						FROM tracks
						WHERE $id = tracks.cid";
			$result = $this->_db->query($sql);
			if (!is_object($result)) 
				throw new Exception($this->_db->lastErrorMsg());
			return $this->db2Arr($result);
		}catch(Exception $e){
			return false;
		}	
	}
	/* Выборка всех треков по альбомам исполнителя */
	function selectItemsByBand($band){
		try{
			$sql = "SELECT tracks.id as id, tracks.title as track, catalog.title as title 
						FROM tracks, catalog 
						WHERE band = '$band' AND catalog.id = tracks.cid";
			$result = $this->_db->query($sql);
			if (!is_object($result)) 
				throw new Exception($this->_db->lastErrorMsg());
			return $this->db2Arr($result);
		}catch(Exception $e){
			return false;
		}	
	}
	/* Изменение количества альбомов */
	function updateQuantity($id, $number){
		$sql = "UPDATE catalog SET quantity = quantity + " . (int)$number;
		$sql .= " WHERE id = ".abs((int)$id);
		//echo $sql.'<br>';
		$this->_db->exec($sql) or $this->_db->lastErrorMsg();
	}	
}
?>