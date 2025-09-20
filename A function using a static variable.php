<?php
function test()
{
static $count = 0;
echo $count . "\n";
$count++;
}
test(); // prints 0
test(); // prints 1
test(); // prints 2
?>