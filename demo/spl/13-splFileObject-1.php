<?php
$it = new SplFileObject('test.txt');

foreach($it as $line) {
	echo $line;
}
?>