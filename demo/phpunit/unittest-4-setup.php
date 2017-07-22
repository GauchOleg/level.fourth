<?php
// Использование setUp() для создания тестового окружения тестирования стека
class ArrayTest extends PHPUnit_Framework_TestCase{
    protected $arr;
 
    protected function setUp(){
        $this->arr = array();
    }
 
    public function testEmpty(){
        $this->assertTrue(empty($this->arr));
    }
 
    public function testPush(){
        array_push($this->arr, 'foo');
        $this->assertEquals('foo', $this->arr[count($this->arr)-1]);
        $this->assertFalse(empty($this->arr));
    }
 
    public function testPop(){
        array_push($this->arr, 'foo');
        $this->assertEquals('foo', array_pop($this->arr));
        $this->assertTrue(empty($this->arr));
    }
}
?>