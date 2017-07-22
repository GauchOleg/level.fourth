 <?php
class Config{ 
    static private $_instance = null;
    public $login;
	public $password;
	private function __construct(){} //возможность вызова только из getInstance 
    private function __clone(){} // запрещаем клонирование 
    static function getInstance(){ 
        if(self::$_instance == null){
            self::$_instance = new Config();
        }
        return self::$_instance;
    }
    public function setLogin($login){
        $this->login = $login;
	}
	public function setPassword($password){
		$this->password = $password;
    }
}

class Logon{
	private $config;
	private $user_login;
	private $user_password;
	function __construct($user_login, $user_password){
        $this->config = Config::getInstance(); //вызов singleton
        $this->user_login = $user_login;
		$this->user_password = $user_password;
    }
    function Validate(){
        if($this->config->login === $this->user_login and 
			$this->config->password === $this->user_password)
            print "Пользователь.<br>";
        else
            print "Мошенник!<br>";                                             
    }

}
// $obj = new Config(); //ошибка!

$config = Config::getInstance();
$config->setLogin('root');
$config->setPassword('1234');

$user1 = new Logon('root','1234');
$user1->Validate();

$user2=new Logon('admin','1234');
$user2->Validate();
?> 