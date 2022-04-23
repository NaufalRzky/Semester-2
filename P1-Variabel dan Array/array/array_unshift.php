<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Naufal', 'Muhammad', 'Naufal', 'Rizky'];
	array_unshift($name, 'Noval', 'Pal');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>