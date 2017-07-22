<?php
$catalog = new DVD();
$result = $catalog->showCatalog();
if(!is_array($result)){
	$errMsg = $result;
}else{
	echo "<p>Всего записей в каталоге: ".count($result)."</p>";
?>
	<form action="catalog.php" method="post">
	<input type="hidden" name="action" value="order"/>
	<table border="1" width="100%">
	<tr>
		<th>Название</th>
		<th>Исполнитель</th>
		<th>Количество</th>
		<th>Выбрать для заказа</th>
	</tr>
<?php	
	foreach($result as $item){
		$id = $item['id'];
		$title = $item['title'];
		$band = $item['band'];
		$quantity = $item['quantity'];
		echo <<<LABEL
		<tr>
			<td><a href="catalog.php?action=list&id=$id&band=$band&title=$title">$title</a></td>
			<td><a href="catalog.php?action=anthology&band=$band">$band</a></td>
			<td>$quantity</td>
			<td><input type="checkbox" name="order[]" value="$id"></td>
		</tr>
LABEL;
	}
?>
	<tr align="center"><td colspan="4"><input type="submit" value="Заказать"></td></tr>
	</table>
	</form>
<?php	
}
?>