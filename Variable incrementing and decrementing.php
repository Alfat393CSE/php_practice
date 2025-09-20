<?php   

$j = 5;

echo $j++;   // prints 5, THEN $j becomes 6
echo "\n";
echo $j;     // prints 6
echo "\n";
echo ++$j;   // $j is 7 now, adds 1 first, prints 7
echo "\n";

$j = 5;

echo $j--;   // prints 5, THEN $j becomes 4
echo "\n";
echo $j;     // prints 4
echo "\n";
echo --$j;   // $j is 3 now, subtract 1 first, prints 3
// prints 6

?>