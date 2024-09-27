<?php
$varA = [1, 2, 3, 4, 5];
$filteredArray = array_filter($varA, function($n) {
    return $n % 2 == 0; // Keep even numbers
});
echo "Filtered Array: " . implode(", ", $filteredArray);
?>
