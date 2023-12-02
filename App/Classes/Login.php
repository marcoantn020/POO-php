<?php

namespace App\Classes;

/**
 * propriedades => variaveis
 * metodos      => funcao
 */
class Login
{
    public $email;
    public $password;

    public function auth()
    {
        return "O meu email é $this->email e minha senha é $this->password";
    }
}
