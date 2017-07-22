<?php
abstract class Renderer{
	private $_document;
	abstract function render();
	function setDocument($document){
		$this->_document = $document;
	}
}
class HTMLRenderer extends Renderer{
	function render(){
		//Выводим HTML
	}
}
class XMLRenderer extends Renderer{
	function render(){
		//Выводим XML
	}
}
//Создаём соответствующий тип класса Renderer
function RendererFactory(){
	$accept = strtolower($_SERVER["HTTP_ACCEPT"]);
	if(strpos($accept, "text/xml")>0){
		return new XMLRenderer();
	}else{
        return new HTMLRenderer();
	}
}
$renderer = RendererFactory();
$renderer->setDocument("Some content...");
$renderer->render();
?>