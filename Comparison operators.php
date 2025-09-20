<?php
$j = 15;

// 1. ==  (equal to)
var_dump($j == 4);     // false, 15 is not equal to 4
var_dump($j == 15);    // true

// 2. !=  (not equal to)
var_dump($j != 21);    // true, 15 is not equal to 21
var_dump($j != 15);    // false

// 3. >  (greater than)
var_dump($j > 3);      // true, 15 > 3
var_dump($j > 20);     // false

// 4. <  (less than)
var_dump($j < 100);    // true, 15 < 100
var_dump($j < 10);     // false

// 5. >=  (greater than or equal to)
var_dump($j >= 15);    // true, 15 is equal to 15
var_dump($j >= 20);    // false

// 6. <=  (less than or equal to)
var_dump($j <= 8);     // false, 15 is not <= 8
var_dump($j <= 15);    // true

// 7. <>  (not equal to, same as !=)
var_dump($j <> 23);    // true, 15 != 23
var_dump($j <> 15);    // false

// 8. ===  (identical, same value and same type)
var_dump($j === 15);      // true
var_dump($j === "15");    // false, string vs int

// 9. !==  (not identical)
var_dump($j !== "1.2e3");  // true, different value and type
var_dump($j !== 15);        // false

?>
