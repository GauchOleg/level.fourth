<?
namespace Project;
include 'subproject.php';

class Connection{
	function __construct(){
		echo __CLASS__.'<br>';
	}
}
echo 'Из PROJECT:<br>';
$obj = new \Project\Connection;
$obj = new \Project\Sub\Connection;
?>