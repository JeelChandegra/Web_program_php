<?php
$a = 2024;
$b = ($a % 4 == 0 && $a % 100 != 0) || ($a % 400 == 0);
echo $b ? "$a is a leap year." : "$a is not a leap year.";
?>
