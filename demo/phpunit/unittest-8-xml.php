<?php
require_once 'PHPUnit/Extensions/Database/TestCase.php';

class DatabaseTest extends PHPUnit_Extensions_Database_TestCase{
    protected function getConnection(){
        $pdo = new PDO('sqlite2:test.db');
        return $this->createDefaultDBConnection($pdo, 'test.db');
    }

    protected function getDataSet(){
        return $this->createXMLDataSet(__DIR__.'\xml\xml.xml');
    }
	public function testDB(){
		$this->getConnection();
		$this->getDataSet();
	}
}
?>