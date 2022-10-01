<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part2</title>
</head>
<body>
<?php
    $AEP1 = array(5,1,1);
    echo "Test Data: ";
          for ($i = 0; $i < count($AEP1); $i++) {
               echo "$AEP1[$i], ";
            }
    echo "</br>Total number of duplicate elements found in the array is : ";
        for ($i = 0; $i < count($AEP1); $i++) {
             for ($j = $i + 1; $j < count($AEP1); $j++) {
                if ($AEP1[$i] == $AEP1[$j])
                    echo "$AEP1[$j]";
                }
            }
?>
</body>
</html>