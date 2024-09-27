<?php
$varA = [1, 2, 3, 4, 5, 6];
$chunks = array_chunk($varA, 2);
foreach ($chunks as $chunk) {
    echo "Chunk: " . implode(", ", $chunk) . "<br>";
}
?>
