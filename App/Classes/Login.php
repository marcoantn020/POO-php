<?php

namespace App\Classes;

/**
 * propriedades => variaveis
 * metodos      => funcao
 */
class Login
{
//    public string $email;
//    public string $password;

    public function auth(string $email, string $password): string | int
    {
        return "O meu email é $email e minha senha é $password";
    }

    public function authorization(Crud $crud):  string
    {
        return $crud->delete();
    }
}
