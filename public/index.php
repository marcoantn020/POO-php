<?php
declare(strict_types=1);

require "../vendor/autoload.php";

try {
    $login = new \App\Classes\Login;

    echo $login->auth(email: "marco@marco.com", password: '123');
    echo "<br />";
    echo $login->authorization(new \App\Classes\Crud());

} catch (TypeError $te) {
    var_dump($te->getMessage());
}

