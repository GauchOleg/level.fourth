<?php
abstract class Car {
	abstract function getMaxSpeed();
	abstract function getWeight();
}
class CarsFactory {
	function createCar($brand='') {
		$car_obj = null;

		switch (strtolower($brand)) {
			case 'toyota':
				$car_obj = new Toyota;break;
			case 'bmw':
				$car_obj = new BMW;break;
			default:
				$car_obj = new Lada;
		}
		return $car_obj;
	}
}

class Toyota extends Car {
	public function getMaxSpeed() {
		return
	}
	public function getWeight() {
		//
	}
}

class BMW extends Car {
	public function getMaxSpeed() {
		//
	}
	public function getWeight() {
		//
	}
}

class Lada extends Car {
	public function getMaxSpeed() {
		//
	}
	public function getWeight() {
		//
	}
}

$carsFactory = new CarsFactory();
$cars['toyota'] = $carsFactory->createCar('toyota');
$cars['bmw'] = $carsFactory->createCar('bmw');

foreach ($cars as $mod => $obj) {
	echo 'Max speed: '.$obj->getMaxSpeed().'';
	echo 'Weight: '.$obj->getWeight();
}
?>