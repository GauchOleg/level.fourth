<?php
abstract class User {
	protected $name = null;

	function _construct($name){
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	// Методы определения прав доступа
	function hasReadPermission(){
		return true;
	}
	function hasModifyPermission(){
		return false;
	}
	function hasDeletePermission(){
		return false;
	}
	// Дополнительные настройки интерфейса
	function wantsFlashInterface(){
		return true;
	}
}
class GuestUser extends User {}

class CustomerUser extends User {
	function hasModifyPermission(){
		return true;
	}
}

class AdminUser extends User {
	function hasModifyPermission(){
		return true;
	}
	function hasDeletePermission(){
		return true;
	}
	function wantsFlashInterface(){
		return false;
	}
}

class UserFactory {
	private static $users = array("John"=>"admin",
									"Mike"=>"guest",
									"Vasya"=>"customer");
	static function Create($name){
		if (!isset(self::$users[$name])){
			// Вывод сообщения об ошибке - пользователь не зарегистрирован
		}
		switch (self::$users[$name]) {
			case "guest": return new GuestUser($name);
			case "customer": return new CustomerUser($name);
			case "admin": return new AdminUser($name);
			default: // Ошибка - неизвестный тип пользователя
		}
	}
}
function boolToStr($b){
	if($b == true){
		return "Да\n";
	}else{
		return "Нет\n";
	}
}
function displayPermissions(User $obj){
	print "Права доступа пользователя " . $obj->getName() . ":\n";
	print "Чтение: " . boolToStr($obj->hasReadPermission());
	print "Изменение: " . boolToStr($obj->hasModifyPermission());
	print "Удаление: " . boolToStr($obj->hasDeletePermission());
}
function displayRequirements(User $obj){
	if ($obj->wantsFlashInterface()) {
		print "Для пользователя ".$obj->getName()." требуется Flash-интерфейс\n";
	}
}
$logins = array("John", "Mike", "Vasya");
foreach($logins as $login){
	displayPermissions(UserFactory::Create($login));
	displayRequirements(UserFactory::Create($login));
}
?>