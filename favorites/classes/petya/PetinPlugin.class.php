<?
require_once 'classes/IPlugin.class.php';
class PetinPlugin implements IPlugin{
	private $links = array(
						array('Super Puper Site 1', 'www.site-1.com'),
						array('Super Puper Site 2', 'www.site-2.com'),
					);
	private $articles = array(
						array('Super Puper Article 1', 'www.site.com/index.php?id=1'),	
						array('Super Puper Article 2', 'www.site.com/index.php?id=2'),	
						array('Super Puper Article 3', 'www.site.com/index.php?id=3'),	
						array('Super Puper Article 4', 'www.site.com/index.php?id=4'),	
					);				
	public static function getName() { return '—сылки от ѕети'; }
	public function getLinksItems() {
		return $this->links;
	}
	public static function getArticlesItems() {
		return $this->articles;
	}	
}
?>