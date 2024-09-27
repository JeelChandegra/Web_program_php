<?php
$varA = [1, 2, 3, 4, 5];
array_splice($varA, 2, 1, [6, 7]);
echo "Array after splice: " . implode(", ", $varA);
?>
