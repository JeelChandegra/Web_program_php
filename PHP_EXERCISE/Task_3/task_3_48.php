<?php
$varA = [1, 2, 3];
$sum = array_reduce($varA, function($carry, $item) {
    return $carry + $item;
}, 0);
echo "Sum of Array: $sum";
?>
