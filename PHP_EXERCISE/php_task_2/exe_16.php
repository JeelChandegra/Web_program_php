<?php
$sentence = "Hello World";
$vowel_count = preg_match_all('/[aeiou]/i', $sentence);
echo "Number of vowels: " . $vowel_count;
?>
