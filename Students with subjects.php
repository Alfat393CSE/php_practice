<?php
$students = array(
    "Alice" => array("Math" => 85, "English" => 90),
    "Bob"   => array("Math" => 78, "English" => 82),
    "Carol" => array("Math" => 92, "English" => 88)
);

// Access a specific mark
echo $students["Alice"]["Math"]; // 85
echo "\n";

// Loop through
foreach ($students as $name => $subjects) {
    echo "$name: ";
    foreach ($subjects as $subject => $score) {
        echo "$subject = $score ";
    }
    echo "\n";
}
?>
