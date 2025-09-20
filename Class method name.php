<?php
class MyClass {
    public function myMethod() {
        echo "Method name is: " . __METHOD__;
    }
}

$obj = new MyClass();
$obj->myMethod();
?>