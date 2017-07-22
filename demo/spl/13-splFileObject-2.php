<?php
/*
$file = new SplFileObject($_SERVER['DOCUMENT_ROOT'].'/test.txt');

while($file->valid()){
    echo $file->current().'<br>';
    $file->next();
}
*/
?>

<?php
/*
foreach( new SplFileObject($_SERVER['DOCUMENT_ROOT'].'/test.txt') as $line){
	echo $line.'<br />';
}
*/
?>

<?php
/*
$file = new SplFileObject($_SERVER['DOCUMENT_ROOT'].'/test.txt');

$file->seek( 3 );

echo $file->current();
*/
?>

<?php
/*
foreach( get_class_methods(SplFileObject) as $methodName){
	echo $methodName.'<br />';
}
*/
?>