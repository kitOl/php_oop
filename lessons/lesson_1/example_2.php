<?php
// Access to Class Static feature

class Test
{
    static $static_property = "Это статическое свойство";

    function get_sp()
    {
        return self::$static_property;
    }
}

$temp = new Test();

echo "Test A: " . Test::$static_property . "\n";
echo "Test B: " . $temp->get_sp() . "\n";
echo "Test C: " . $temp->static_property . "\n"; // don't access!
