<?php
namespace App;

class User
{
    public $firstname;
    public $lastname;

    public function setFirstName($name)
    {
        $this->firstname = trim($name);
    }

    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setLastName($name)
    {
        $this->lastname = trim($name);
    }

    public function getLastName()
    {
        return $this->lastname;
    }

    public function getFullname()
    {
        return "$this->firstname $this->lastname";
    }
}
