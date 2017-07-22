<?php
// Использование разных методов
class StackTest extends PHPUnit_Framework_TestCase{
    
	public function testEmpty(){
        $arr = array();
        $this->assertTrue(empty($arr));
	}

    public function testPush(){
        $arr = array();
		array_push($arr, 'foo');
        $this->assertEquals('foo', $arr[count($arr)-1]);
        $this->assertFalse(empty($arr));
	}
    
	public function testPop(array $arr){
        $arr = array();
		$this->assertEquals('foo', array_pop($arr));
        $this->assertTrue(empty($arr));
    }
}
?>