<?php
Translate::lookup();   // Call the static method lookup() from the Translate class

class Translate
{
    const ENGLISH = 0;   // A constant named ENGLISH with value 0
    const SPANISH = 1;   // A constant named SPANISH with value 1
    const FRENCH = 2;    // A constant named FRENCH with value 2
    const GERMAN = 3;    // A constant named GERMAN with value 3
    // ...
    static function lookup()
    {
        echo self::SPANISH;  // Print the constant SPANISH (so it prints "1")
    }
}
?>
