<?php
$varA = [1, 2, 3];
$varB = [2, 3, 4];
$intersection = array_intersect($varA, $varB);
echo "Intersection: " . implode(", ", $intersection);
?>
