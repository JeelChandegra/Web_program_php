<?php
$array = [10, 20, 30, 40];
$searchValue = 30;
$index = array_search($searchValue, $array);
echo $index !== false ? "Index of $searchValue: $index" : "$searchValue not found in array.";
?>
