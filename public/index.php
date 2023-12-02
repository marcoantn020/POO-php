<?php

require "../vendor/autoload.php";

$stdClass = new stdClass;
$stdClass->name = "Marco";
$stdClass->email = "marco@mail.com";

var_dump($stdClass->email);
