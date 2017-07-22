<?php
$catalog = new DVD();
$band = trim(strip_tags($_GET['band']));
$result = $catalog->showBand($band);
if(!is_array($result)){
	$errMsg = $result;
}else{
	echo "<p>Всего треков: ".count($result)."</p>";
?>
	<form action="catalog.php" method="post">
	<input type="hidden" name="action" value="anthology"/>
	<table border="1" width="100%">
	<tr align="center"><th colspan="4">Исполнитель: <?=$band?></th></tr>
	<tr>
		<th>Альбом</th>
		<th>Трек</th>
		<th>Выбрать для заказа</th>
	</tr>
<?php	
	foreach($result as $item){
		$id = $item['id'];
		$title = $item['title'];
		$track = $item['track'];
		
		echo <<<LABEL
		<tr>
			<td>$title</td>
			<td>$track</td>
			<td><input type="checkbox" name="order[]" value="$id"></td>
		</tr>
LABEL;
	}
?>
	<tr align="center">
		<td colspan="4">
			<input type="checkbox" name="bonus" value="1"> Добавить бонус-трек
			<input type="submit" value="Составить">
		</td>
	</tr>
	</table>
	</form>
<?php	
}
?>