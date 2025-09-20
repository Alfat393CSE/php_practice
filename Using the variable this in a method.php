<?php
class User
{
    public $name, $password;

    function get_password()
    {
        return $this->password;
    }
}

// Create a new user object
$user1 = new User();
$user1->name = "Alice";
$user1->password = "mypassword123";

// Access properties
echo "Name: " . $user1->name . "\n";              // Alice
echo "Password: " . $user1->get_password() . "\n"; // mypassword123
?>
