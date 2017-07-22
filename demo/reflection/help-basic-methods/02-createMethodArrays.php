<?php
private function createMethodArrays(){
	$methods = $this->getMethods();
	//ReflectionMethod array returned
	foreach($methods as $m){
		$name = $m->getName();
		if($m->isPublic()){
			$this->publicmethods[$name] = $m;
		}
		if($m->isProtected()){
			$this->protectedmethods[$name] = $m;
		}
		if($m->isPrivate()){
			$this->privatemethods[$name] = $m;
		}
	}
}
?>