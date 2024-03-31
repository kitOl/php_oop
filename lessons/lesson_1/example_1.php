<?php
// Access to Class Static method without created the object

class Translate
{
    const ENGLISH = 0;
    const SPANISH = 1;
    const FRENCH = 2;
    const GERMAN = 2;

    static function lookup()
    {
        echo self::SPANISH, "\n";
    }
}

Translate::lookup();

//======== example 2 ======


class User
{
    static function pwd_string()
    {
        echo "Please enter your password", "\n";
    }
}

User::pwd_string();