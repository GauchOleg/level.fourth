<?php
public function getFullDescription(){
	$description = "";
	if($this->isFinal()){
		$description = "final ";
	}
	if($this->isAbstract()){
		$description = "abstract ";
	}
	if($this->isInterface()){
		$description .= "interface ";
	}else{
		$description .= "class ";
	}
	$description .= $this->name . " ";
	if($this->getParentClass()){
		$name = $this->getParentClass()->getName();
		$description .= "extends $name ";
	}
	$interfaces = $this->getInterfaces();
	$number = count($interfaces);
	if($number > 0){
		$counter = 0;
		$description .= "implements ";
		foreach($interfaces as $i){
			$description .= $i->getName();
			$counter++;
			if($counter != $number){
				$description .= ", ";
			}
		}
	}
	return $description;
}
?>