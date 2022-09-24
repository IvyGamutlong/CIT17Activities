<!DOCTYPE html>
<html>
<head>
	<title>PHPArrayExercises2</title>
</head>
<body>
<?php
$LC = array ("Tokyo", "Mexico City", "New York City", "Mumbai Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London ");
	
	for($i = 0; $i < COUNT($LC); $i++){
	print $LC[$i] . ", ";
	}
?>
<?php sort($LC); ?>

<ul>
<?php
	for ($i = 0; $i < COUNT($LC); $i++) {
	echo "<li>$LC[$i]</li>";
	}
?>
</ul>

<?php array_push($LC, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>
<?php sort($LC); ?>

<ul>
<?php
	for ($i = 0; $i < COUNT($LC); $i++) {
	echo "<li>$LC[$i]</li>";
		}
?>
</ul>
</body>
</html>