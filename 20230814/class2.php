<?php

class Math
{
    public $firstname;
    public $lastname;

    public static function square($num)
    {
        return $num * $num;
    }

}

echo Math::square(4);