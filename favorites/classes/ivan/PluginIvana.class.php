<?
require_once 'classes/IPlugin.class.php';
class PluginIvana implements IPlugin{
	private $links = array(
						array('Site 1', 'www.site-1.org'),
						array('Site 2', 'www.site-2.org'),
						array('Site 3', 'www.site-3.org'),
					);
	private $articles = array(
						array('Article 1', 'www.site.org/index.php?id=1'),	
						array('Article 2', 'www.site.org/index.php?id=2'),	
						array('Article 3', 'www.site.org/index.php?id=3'),	
						array('Article 4', 'www.site.org/index.php?id=4'),	
					);
	private $apps = array(
						array('App 1', 'www.site.org/app-1/'),	
						array('App 2', 'www.site.org/app-2/'),	
						array('App 3', 'www.site.org/app-3/'),	
						array('App 4', 'www.site.org/app-4/'),	
					);				
	public static function getName() { return '—сылки от ѕети'; }
	public static function getLinksItems() {
		return $this->links;
	}
	public function getArticlesItems() {
		return $this->articles;
	}
	public static function getAppsItems() {
		return $this->apps;
	}	
}
?>