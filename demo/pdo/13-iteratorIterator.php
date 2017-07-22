<?php
$db = new PDO('sqlite:users.db');
$pdoStatement = $db->query('SELECT * FROM user');
$iterator = new IteratorIterator($pdoStatement);
$limitIterator = new LimitIterator($iterator, 0, 3);
$tenRecordArray = iterator_to_array($limitIterator);
?>