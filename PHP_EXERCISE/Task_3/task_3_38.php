<?php
$varA = [1, 2, 3];
array_unshift($varA, 0);
echo "Array after unshift: " . implode(", ", $varA) . "<br>";
array_shift($varA);
echo "Array after shift: " . implode(", ", $varA);
?>
