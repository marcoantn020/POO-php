<?php

namespace App\Classes;

class User extends Person
{
    public function info()
    {
        return parent::$name;
    }
}