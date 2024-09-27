<?php
$a = 29;
$b = true;
if ($a < 2) $b = false;
for ($i = 2; $i <= sqrt($a); $i++) {
    if ($a % $i == 0) {
        $b = false;
        break;
    }
}
echo $b ? "$a is a prime number." : "$a is not a prime number.";
?>
