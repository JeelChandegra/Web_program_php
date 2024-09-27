<?php
$varA = [1, 2, 3, 4, 5];
shuffle($varA);
$shuffledArray = $varA; // Store the shuffled array
echo "Shuffled Array: " . implode(", ", $shuffledArray);
?>
