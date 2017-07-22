<?
require_once 'classes/IPlugin.class.php';
class VasinPlugin implements IPlugin{
	private $links = array(
						array('Super Site 1', 'www.site-1.ru'),
						array('Super Site 2', 'www.site-2.ru'),
						array('Super Site 3', 'www.site-3.ru'),
						array('Super Site 4', 'www.site-4.ru'),						
					);
	private $apps = array(
						array('Super App 1', 'www.site.ru/app-1/'),	
						array('Super App 2', 'www.site.ru/app-2/'),	
					);				
	public static function getName() { return '—сылки от ¬аси'; }
	public static function getLinksItems() {
		return $this->links;
	}
	public function getAppsItems() {
		return $this->apps;
	}	
}
?>