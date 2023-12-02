<?php

//require "../Helpers/autoload.php";
require "../vendor/autoload.php";

$login = new \App\Classes\Login();
//$login->email = "marco@mail.com";
//$login->password = '123';
//echo $login->auth();

var_dump($login);
echo "<br>";
echo helper();
echo "<br>";



$userArray = ["name" => "Marco", "email" => "marco@mail.com"];

$userObject = (object) $userArray;
var_dump($userObject->email);

echo "<br>";
echo "<br>";

$crud = new \App\Classes\Crud();
echo $crud->read();

echo "<br>";
echo "<br>";

$user = new \App\Model\User();
echo $user->test();