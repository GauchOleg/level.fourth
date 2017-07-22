<?php
$del = $_GET['del'] * 1;
if($del === 0){
	$errMsg = "Хакер, не ломай мою новостную ленту!";
}else{
	$result = $news->deleteNews($del);
	if(!$result){
		$errMsg = "Произошла ошибка при удалении новости";
	}else{
		header('Location: ' . $_SERVER['PHP_SELF']);
		exit;
	}
}
?>