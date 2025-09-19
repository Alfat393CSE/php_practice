<?php
// A 2D array (like a matrix)
$numbers = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Accessing elements
echo $numbers[0][0]; // 1 (row 0, column 0)
echo "\n";
echo $numbers[1][2] . "\n"; // 6 (row 1, column 2)

// Loop through it
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $numbers[$i][$j] . " ";
    }
    echo "\n";
}
?>
