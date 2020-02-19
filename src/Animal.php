<?php
namespace App;

class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function makeSound()
    {
        echo "My name is {$this->name} and i bleat!";
    }
}
