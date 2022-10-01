<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
<?php
$AEP2 = array(25,12,43);
            echo "<br/><br/>Test Data: ";
            for ($i = 0; $i < count($AEP2); $i++) {
                echo $AEP2[$i].", ";
            }
            echo "</br>Frequency :</br>";
            for ($i = 0, $unique = array(); $i < count($AEP2); $i++) {
                $frequency = 0;
                if (!in_array($AEP2[$i], $unique)) {
                    array_push($unique, $AEP2[$i]);
                }
                for ($j = 0; $j < count($AEP2); $j++) {
                    if ($unique[$i] == $AEP2[$j]) {
                        $frequency++;
                    }
                }
                if ($unique[$i]) {
                    echo "$unique[$i] occurs $frequency times<br/>";
                }
            }

?>
</body>
</html>