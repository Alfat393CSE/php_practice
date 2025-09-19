<?php
// Starting value
$j = 15;
echo "Initial j: $j\n";  // 15

// =  (assignment)
$j = 15;  
echo "Assignment (=): $j\n";  // 15

// +=  (add and assign)
$j += 5;   // equivalent to $j = $j + 5
echo "Add and assign (+=): $j\n";  // 20

// -=  (subtract and assign)
$j -= 3;   // equivalent to $j = $j - 3
echo "Subtract and assign (-=): $j\n";  // 17

// *=  (multiply and assign)
$j *= 8;   // equivalent to $j = $j * 8
echo "Multiply and assign (*=): $j\n";  // 136

// /=  (divide and assign)
$j /= 16;  // equivalent to $j = $j / 16
echo "Divide and assign (/=): $j\n";  // 8.5

// .=  (concatenate and assign)
$k = " apples";
$j .= $k;  // equivalent to $j = $j . $k
echo "Concatenate and assign (.=): $j\n";  // "8.5 apples"

// %=  (modulus and assign)
$j = 15;       // reset $j to 15 for modulus
$j %= 4;       // equivalent to $j = $j % 4
echo "Modulus and assign (%=): $j\n";  // 3
?>
