<?php
class Logger{
	const LOG_NAME = 'control.log';
	static private $_instance = null;
    private function __construct(){} //возможность вызова только из getInstance
    private function __clone(){} // запрещаем клонирование
    static function getInstance(){
        if(self::$_instance == null){
            self::$_instance = new Logger();
        }
        return self::$_instance;
    }
    public function Log($str){
        //Здесь пишем в лог
        file_put_contents(self::LOG_NAME,$str.PHP_EOL,FILE_APPEND);
	}
}
// $obj = new Logger(); //ошибка!

$config = Logger::getInstance();
$config->Log('Контрольная точка на строке '.__LINE__);
//
//
Logger::getInstance()->Log('Контрольная точка на строке '.__LINE__);
?>