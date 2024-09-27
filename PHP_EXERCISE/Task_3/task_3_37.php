<?php
$varA = [1, 2, 3];
array_push($varA, 4);
echo "Array after push: " . implode(", ", $varA) . "<br>";
array_pop($varA);
echo "Array after pop: " . implode(", ", $varA);
?>
