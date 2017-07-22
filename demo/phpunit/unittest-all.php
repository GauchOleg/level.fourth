<?php
require_once 'PHPUnit/Framework.php';
require_once 'tests/demotest-2.php';
require_once 'tests/demotest-3.php';

class AllTests {
	public static function suite() {
		$suite = new PHPUnit_Framework_TestSuite('Project');
		$suite->addTestSuite('DemoTest');
		$suite->addTestSuite('SomeDemoTest');
		return $suite;
	}
}