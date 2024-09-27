<?php
$varA = [1, 2, 3];
$varB = [2, 3, 4];
$difference = array_diff($varA, $varB);
echo "Difference: " . implode(", ", $difference);
?>
