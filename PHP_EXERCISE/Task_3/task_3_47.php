<?php
$varA = [1, 2, 3];
$squaredArray = array_map(function($n) { return $n * $n; }, $varA);
echo "Squared Array: " . implode(", ", $squaredArray);
?>
