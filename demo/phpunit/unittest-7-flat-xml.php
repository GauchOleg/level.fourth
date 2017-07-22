<?php
require_once 'PHPUnit/Extensions/Database/TestCase.php';

class DatabaseTest extends PHPUnit_Extensions_Database_TestCase{
    protected function getConnection(){
        $pdo = new PDO('sqlite2:test.db');
        return $this->createDefaultDBConnection($pdo, 'test.db');
    }

    protected function getDataSet(){
        return $this->createFlatXMLDataSet(__DIR__.'\xml\flatXml.xml');
    }
	public function testDB(){
		$this->getConnection();
		$this->getDataSet();
	}
}
?>