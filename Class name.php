<?php
class MyClass {
    public function showClass() {
        echo "Class name is: " . __CLASS__;
    }
}

$obj = new MyClass();
$obj->showClass();
?>
