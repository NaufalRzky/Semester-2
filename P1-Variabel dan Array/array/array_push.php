<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Naufal', 'Muhammad', 'Naufal', 'Rizky'];
	array_push($name, 'Noval');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>