<?php
// “естирование операторов массива

$arr = array();
// $arr - должен быть пустой массив.

$arr[] = 'element';
// $arr - содержит один элемент.
?>

<?php
// »спользование вывода на экран дл€ проверки операторов массива

$arr = array();
print count($arr) . "\n";

$arr[] = 'element';
print count($arr) . "\n";
?>

<?php
//“естирование операторов массива, сравнение ожидаемого результата и фактического значени€
$arr = array();
print count($arr) == 0 ? "ok\n" : "not ok\n";

$arr[] = 'element';
print count($arr) == 1 ? "ok\n" : "not ok\n";
?>

<?php
// »спользование функции утверждени€ дл€ тестировани€ операторов массива

function assertTrue($condition){
	if(!$condition) {
		throw new Exception('Assertion failed.');
	}
}
$arr = array();
assertTrue(count($arr) == 0);

$arr[] = 'element';
assertTrue(count($arr) == 1);
?>