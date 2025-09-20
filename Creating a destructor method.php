<?php
class User {
    public $name;

    // Constructor
    function __construct($n) {
        $this->name = $n;
        echo "User {$this->name} is created.\n";
    }

    // Destructor
    function __destruct() {
        echo "User {$this->name} is destroyed.\n";
    }
}

// Create object
$user1 = new User("Alice");

echo "Doing some work with the object...\n";

// At the end of the script (or when unset), destructor runs automatically
?>
