<pre>
<?php
/**
 * Свой класс Reflection_Method
 */
class My_Reflection_Method extends ReflectionMethod
{
    public $visibility = array();

    public function __construct($obj, $mth)
    {
        parent::__construct($obj, $mth);
        $this->visibility = Reflection::getModifierNames($this->getModifiers());
    }
}

/**
 * Демо-класс #1
 *
 */
class ParentClass {
    protected function foo() {}
}

/**
 * Демо-класс #2
 *
 */
class ChildClass extends ParentClass {
    function foo() {}
}

// Вывод информации
var_dump(new My_Reflection_Method('ChildClass', 'foo'));
?>
</pre>