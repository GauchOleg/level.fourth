<?php
$it = new SplFileObject('test.csv');

while($array = $it->fgetcsv()) {
	var_export($array);
}
?>