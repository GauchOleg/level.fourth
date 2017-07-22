<?php
private function createDataMemberArrays(){    
	//ReflectionProperty[] getProperties()
	$properties = $this->getProperties();
	foreach ($properties as $p){      
		$name = $p->getName();
		if($p->isPublic()){      
			$this->publicdatamembers[$name] = $p;
		}
		if($p->isPrivate()){      
			$this->privatedatamembers[$name] = $p;
		}
		if($p->isProtected()){      
			$this->protecteddatamembers[$name] = $p;
		}
	}
}
?>