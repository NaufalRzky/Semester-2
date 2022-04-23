<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Naufal', 'Muhammad', 'Naufal', 'Rizky'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>