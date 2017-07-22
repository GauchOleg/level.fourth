<?php
require_once 'PHPUnit/Extensions/Database/TestCase.php';
require_once 'PHPUnit/Extensions/Database/DataSet/CsvDataSet.php';

class DatabaseTest extends PHPUnit_Extensions_Database_TestCase{
    protected function getConnection(){
        $pdo = new PDO('sqlite2:test.db');
        return $this->createDefaultDBConnection($pdo, 'test.db');
    }

    protected function getDataSet(){
    $dataSet = new PHPUnit_Extensions_Database_DataSet_CsvDataSet();
    $dataSet->addTable('post', 'csv/post.csv');
    $dataSet->addTable('post_comment', 'csv/post_comment.csv');
    $dataSet->addTable('current_visitors', 'csv/current_visitors.csv');
        return $dataSet;
    }
	public function testDB(){
		$this->getConnection();
		$this->getDataSet();
	}
}
?> 