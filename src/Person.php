<?php


namespace Iic;


class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello()
    {
        echo 'hello ' . $this->name . PHP_EOL;
    }

}