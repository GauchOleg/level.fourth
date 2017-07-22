<?php
abstract class ImageType{
    protected $type;
	function returnType(){
        return $this->type;
    }
}
class GIFType extends ImageType{
    function __construct($fileName){
        $this->type = 'gif';
    }
}

class JPGType extends ImageType{
    function __construct($fileName){
        $this->type = 'jpg';
    }
}
class PNGType extends ImageType{
    function __construct($fileName){
        $this->type = 'png';
    }
}
class OtherType  extends ImageType{
    function __construct($fileName){
        $this->type = 'неизвестен';
    }
}
class ImageFactory{
    static function checkType($fileName){
		if(strpos($fileName, '.gif'))
            return new GIFType($fileName);
        elseif(strpos($fileName, '.jpg'))
            return new JPGType($fileName);
		elseif(strpos($fileName, '.png'))
            return new PNGType($fileName);	
        else
            return new OtherType($fileName);
    }
}
$fileNames = array('test.jpg','test.txt','test.gif','test.png');

foreach($fileNames as $fileName){
    print "Тип файла ".$fileName." ";
    print ImageFactory::checkType($fileName)->returnType().".<br>";
}
?>