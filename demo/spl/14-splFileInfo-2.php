<?php
class CustomFO extends SplFileObject{
	private $i=1;
	public function current(){
		return $this->i++ . ": " . htmlspecialchars($this->getCurrentLine())."";
	}
}

$SFI= new SplFileInfo( "splFileInfo.php" );
$SFI->setFileClass( "CustomFO" );
$file = $SFI->openFile();
echo "<pre>";
foreach( $file as $line ){
	echo $line;
}
echo "</pre>";
?>

<?php
/*
foreach( get_class_methods(SplFileInfo) as $methodName){
	echo $methodName.'<br />';
}
*/
?>