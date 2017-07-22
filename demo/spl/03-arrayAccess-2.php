<?php
class registry implements ArrayAccess{
    private $props = array();

    public function offsetSet($name, $value){
        $this->props[$name] = $value;
        return true;
    }

    public function offsetExists($name){
        return isset($this->props[$name]);
    }

    public function offsetUnset($name){
        unset($this->props[$name]);
        return true;
    }

    public function offsetGet($name){
        if(!isset($this->props[$name])){
            return null;
        }
        return $this->props[$offset];
    }
}
$obj = new registry();
$obj["login"] = 'root';
$obj["password"] = '1234';
echo $obj["login"].':'.$obj["password"];
?>