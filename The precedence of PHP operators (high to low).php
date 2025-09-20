<?php
// 1. Parentheses ()
$a = 5;
$b = 10;
$c = ($a + $b) * 2; // parentheses change the order of operations
echo "Parentheses result: $c\n"; // 30

// 2. Increment / Decrement ++ --
$x = 5;
$y = ++$x; // pre-increment
$z = $x--; // post-decrement
echo "Increment/Decrement: x=$x, y=$y, z=$z\n"; // x=5, y=6, z=6

// 3. Logical ! (NOT)
$flag = true;
echo "Logical NOT: " . (!$flag ? "False" : "True") . "\n"; // False

// 4. Arithmetic * / %
$num1 = 20;
$num2 = 6;
echo "Multiplication: " . ($num1 * $num2) . "\n"; // 120
echo "Division: " . ($num1 / $num2) . "\n";       // 3.3333
echo "Modulus: " . ($num1 % $num2) . "\n";        // 2

// 5. Arithmetic + - and String concatenation .
$a = 10;
$b = 5;
$str1 = "Hello";
$str2 = "World";
echo "Addition: " . ($a + $b) . "\n";        // 15
echo "Subtraction: " . ($a - $b) . "\n";     // 5
echo "Concatenation: " . ($str1 . " " . $str2) . "\n"; // Hello World

// 6. Bitwise << >>
$val = 2; 
echo "Left shift (2 << 1): " . ($val << 1) . "\n";  // 4
echo "Right shift (2 >> 1): " . ($val >> 1) . "\n"; // 1

// 7. Comparison < <= > >= <>
$a = 10;
$b = 20;
echo "Less than: " . ($a < $b ? "True" : "False") . "\n";      // True
echo "Less or equal: " . ($a <= $b ? "True" : "False") . "\n"; // True
echo "Greater than: " . ($a > $b ? "True" : "False") . "\n";   // False
echo "Greater or equal: " . ($a >= $b ? "True" : "False") . "\n"; // False
echo "Not equal (<>): " . ($a <> $b ? "True" : "False") . "\n"; // True

// 8. Comparison == != === !==
$a = 5;
$b = "5";
echo "Equal (==): " . ($a == $b ? "True" : "False") . "\n";       // True
echo "Not equal (!=): " . ($a != $b ? "True" : "False") . "\n";   // False
echo "Identical (===): " . ($a === $b ? "True" : "False") . "\n"; // False
echo "Not identical (!==): " . ($a !== $b ? "True" : "False") . "\n"; // True

// 9. Bitwise & ^
$a = 6;  // 110 in binary
$b = 3;  // 011 in binary
echo "Bitwise AND (&): " . ($a & $b) . "\n"; // 2 (010)
echo "Bitwise XOR (^): " . ($a ^ $b) . "\n"; // 5 (101)

?>
