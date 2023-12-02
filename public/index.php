<?php

require "../app/Classes/Login.php";

$login = new Login();
//$login->email = "marco@mail.com";
//$login->password = '123';
//
//echo $login->auth();
var_dump($login);
echo "<br>";
echo "<br>";

$user = ["name" => "Marco", "email" => "marco@mail.com"];

$userObject = (object) $user;
var_dump($userObject->email);