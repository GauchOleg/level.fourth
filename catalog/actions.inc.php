<?php
switch($_POST['action']){
	case 'order':
		$titles = $_POST['order'];
		foreach($titles as $title){
			$dvd = new DVD($title);
			$dvd->buy();
		}
		break;
	case 'anthology':
		$band = trim(strip_tags($_POST['band']));
		$tracks = array_map(function($val){return (int)$val;}, $_POST['order']);
		$dvd = new DVD();
		$dvd->setBand($band);
		foreach ($tracks as $track) {
			$dvd->addTrack($track);
		}
		break;
	case 'list':
		$id = abs((int)$_POST['id']);
		$band = trim(strip_tags($_POST['band']));
		$title = trim(strip_tags($_POST['title']));
		$dvd = new DVD();
		$dvd->setTitle($title);
		$dvd->setBand($band);
		$dvd->getXML($id);
		break;
}
header('Location: catalog.php');
exit;
?>