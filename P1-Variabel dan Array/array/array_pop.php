<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['Naufal', 'Muhammad', 'Naufal', 'Rizky'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>