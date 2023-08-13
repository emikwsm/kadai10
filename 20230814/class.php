<?php

class Person
{
    public $firstname = 'fukushiam';
    public function sayHello()
    {
        echo 'こんにちは。私の名前は' . $this->firstname . 'です。';
    }
}

// インスタンス化する。
$person = new Person();
$person->sayHello();


