<?php
$j = 3;
$k = 2;

// 1. && (AND) — high precedence
var_dump($j == 3 && $k == 2);   // true, because both conditions are true
var_dump($j == 3 && $k == 5);   // false, second condition is false

// 2. and (low precedence AND)
// Works the same as && but with lower precedence
// Sometimes affects how assignment works
$result = false;
$result = $j == 3 and $k == 2;
var_dump($result);  // bool(false) → because "and" binds weaker than "="
// If we use parentheses, it works as expected:
$result = ($j == 3 and $k == 2);
var_dump($result);  // bool(true)

// 3. || (OR) — high precedence
var_dump($j < 5 || $j > 10);   // true, because first condition is true
var_dump($j < 1 || $k < 1);    // false, both conditions are false

// 4. or (low precedence OR)
// Same as || but lower precedence (assignment issue again)
$result = false;
$result = $j < 5 or $j > 10;
var_dump($result);  // bool(false) → "or" is weaker than "="
// With parentheses:
$result = ($j < 5 or $j > 10);
var_dump($result);  // bool(true)

// 5. ! (NOT) — negates the result
var_dump(!($j == $k));   // true, because (3 == 2) is false, and NOT false = true
var_dump(!($j == 3));    // false, because (3 == 3) is true, NOT true = false

// 6. xor (Exclusive OR)
// True only if one condition is true, not both
var_dump($j == 3 xor $k == 2);   // false, because both are true
var_dump($j == 3 xor $k == 5);   // true, only first is true
var_dump($j == 1 xor $k == 2);   // true, only second is true
?>
