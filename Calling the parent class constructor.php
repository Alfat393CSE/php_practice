<?php
$object = new Tiger();
echo "Tigers have...\n";
echo "Fur: " . $object->fur . "\n";
echo "Stripes: " . $object->stripes . "\n";


class Wildcat
{
public $fur; // Wildcats have fur
function __construct()
{
$this->fur = "TRUE";
}
}
class Tiger extends Wildcat
{
public $stripes; // Tigers have stripes
function __construct()
{
parent::__construct(); // Call parent constructor first
$this->stripes = "TRUE";
}
}
?>