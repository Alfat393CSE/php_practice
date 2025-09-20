<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function greet() {
        return "Hello, " . $this->name . "!";
    }
}

$person = new Person("Bob");
echo $person->greet();  // Output: Hello, Bob!
?>
