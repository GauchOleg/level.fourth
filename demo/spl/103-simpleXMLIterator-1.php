<?php
foreach( get_class_methods(SimpleXMLIterator) as $methodName){
	echo $methodName.'<br />';
}
?>
<?php
$xmlstring = <<<XML
<?xml version = "1.0" encoding="windows-1251"?>
<catalog>
	<book>
		<category id="26">
			<author>Алекс Гомер</author>
			<title>XML и IE5</title>
			<price>200</price>
		</category>
		<category id="27">
			<author>Алексей Валиков</author>
			<title>Технология XSLT</title>
			<price>150</price>
		</category>
		<category id="28">
			<author>Сандра Э. Эдди</author>
			<title>XML. Справочник</title>
			<price>100</price>
		</category>
	</book>
</catalog>
XML;
?>
<?php
$it = simplexml_load_string($xmlstring, 'SimpleXMLIterator');
/*
foreach(new RecursiveIteratorIterator($it, 1) as $name => $data){
	echo $name.' -- '.$data.'<br>';
}
*/
?>

<?php
/*
$sxi =new SimpleXMLIterator($xmlstring);

foreach ( $sxi as $node ){
	foreach($node as $k=>$v){
		echo $v->title.'<br>';
	}
}
*/
?>

<?php
/*
$sxe = simplexml_load_string($xmlstring, 'SimpleXMLIterator');

for ($sxe->rewind(); $sxe->valid(); $sxe->next()){
	if($sxe->hasChildren()){
		foreach($sxe->getChildren() as $element=>$value){
			echo $value->species.'<br>';
		}
	}
}
*/
?>