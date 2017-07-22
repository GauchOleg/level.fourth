<?php
class CSVFileObject extends SPLFileInfo implements Iterator, SeekableIterator {
	protected $map, $fp, $currentLine;
	public function __construct( $filename,
								$mode = 'r',
								$use_include_path = false,
								$context = NULL
								){
		parent::__construct($filename);
		if(isset($context)) {
			$this->fp = fopen( $filename,
								$mode,
								$use_include_path,
								$context
							);
		} else {
			$this->fp = fopen($filename, $mode, $use_include_path);
		}
		if(!$this->fp) {
			throw new Exception("Cannot read file");
		}
		//Get the column map
		$this->map = $this->fgetcsv();
		$this->currentLine = 0;
	}
	function fgetcsv($delimiter = ',', $enclosure = '"') {
		return fgetcsv($this->fp, 0, $delimiter, $enclosure);
	}
	function key() {
		return $this->currentLine;
	}
	function current() {
		$fpLoc = ftell($this->fp);
		$data = $this->fgetcsv();
		fseek($this->fp, $fpLoc);
		return array_combine($this->map, $data);
	}
	function valid() {
		//Check for end-of-file
		if(feof($this->fp)) {
			return false;
		}
		$fpLoc = ftell($this->fp);
		$data = $this->fgetcsv();
		fseek($this->fp, $fpLoc);
		return (is_array($data));
	}
	function next() {
		$this->currentLine++;
		fgets($this->fp);
	}
	function rewind() {
		$this->currentLine = 0;
		fseek($this->fp, 0);
		fgets($this->fp);
	}
	function seek($line) {
		$this->rewind();
		while($this->currentLine < $line && !$this->eof()) {
			$this->currentLine++;
			fgets($this->fp);
		}
	}
}
$it = new CSVFileObject('data.csv');
var_dump(iterator_to_array($it));
?>