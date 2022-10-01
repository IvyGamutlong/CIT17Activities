<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
	<h1>Separate Odd Even</h1>
<?php
$AEP3 = array(25,47,42,56,32);
            echo "<br/>Test Data: ";
            for ($i = 0; $i < count($AEP3); $i++) {
                echo $AEP3[$i].", ";
            }
            $AEP3_odd = array();
            $AEP3_even = array();
            for ($i = 0; $i < count($AEP3); $i++) {
                if ($AEP3[$i] % 2 == 0) {
                    array_push($AEP3_even, $AEP3[$i]);
                }
                else {
                    array_push($AEP3_odd, $AEP3[$i]);
                }
            }
            echo "<br/>The Even elements are :<br/>";
            for ($i = 0; $i < count($AEP3_even); $i++) {
                echo "$AEP3_even[$i] ";
            }
            echo "<br/>The Odd elements are :<br/>";
            for ($i = 0; $i < count($AEP3_odd); $i++) {
                echo "$AEP3_odd[$i] ";
            }
?>
</body>
</html>