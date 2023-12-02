<?php

namespace App\Classes;

class Crud
{
    public $field = "field";
    public $table = "users";
    public function read()
    {
        var_dump($this->field);
    }

    public function delete(): string
    {
        return 'deletando...';
    }
}