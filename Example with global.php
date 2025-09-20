<?php
$name = "Alfat";

function sayName() {
    global $name; // bring the global variable inside
    echo $name;   
}

sayName(); // Output: Alfat
?>
