<?php
$a = array("apple", "banana");
$b = array("cherry", "date");
$c = $a + $b; // Array union
print_r($c);

$c = array_merge($a, $b);
print_r($c);
?>
