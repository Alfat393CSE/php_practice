<?php
class User {
    public $name;
    public $age;

    // Constructor method
    function __construct($n, $a) {
        $this->name = $n;
        $this->age = $a;
    }
}

// Create object (constructor runs automatically)
$user1 = new User("Alice", 25);
$user2 = new User("Bob", 30);

echo $user1->name . " is " . $user1->age . " years old.<br>";
echo $user2->name . " is " . $user2->age . " years old.";
?>
