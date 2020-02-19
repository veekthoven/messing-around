<?php

namespace Test\unit;

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;
    public function setUp():void
    {
        $this->user = new User;
    }

    public function test_a_user_has_a_first_name()
    {
        $this->user->setFirstname('James');
        $this->assertEquals($this->user->getFirstname(), 'James');
    }

    public function test_a_user_has_a_lastname()
    {
        $this->user->setLastName('Victor');
        $this->assertEquals($this->user->getLastName(), 'Victor');
    }

    public function test_a_user_has_a_fullname()
    {
        $this->user->setFirstname('Lionel');
        $this->user->setLastname('Messi');
        $this->assertEquals($this->user->getFullname(), 'Lionel Messi');
    }

    public function test_first_and_last_name_are_trimmed()
    {
        $this->user->setFirstname('Lionel  ');
        $this->user->setLastname('  Messi');
        $this->assertEquals($this->user->getLastName(), 'Messi');
        $this->assertEquals($this->user->getFirstname(), 'Lionel');
        $this->assertEquals($this->user->getFullname(), 'Lionel Messi');
    }
}
