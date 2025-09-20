<?php
$temp = new Test();
echo "Test A: " . Test::$static_property . "\n";
echo "Test B: " . $temp->get_sp() . "\n";
echo "Test C: " . $temp->static_property . "\n";

class Test
{
static $static_property = "I'm static";
function get_sp()
{
return self::$static_property;
}
}
?>