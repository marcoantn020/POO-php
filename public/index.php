<?php
declare(strict_types=1);

use App\Classes\Book;
use App\Classes\Lamp;
use App\Model\User;

//header('Content-type: application/json');

require "../vendor/autoload.php";

//$book = new Book;

//echo $book->info();
//echo '<br />';
//echo '<br />';

//$lamp = new Lamp;
//$lamp->name = 'Lamp led';
//$lamp->description = 'Description complete of lamp';
//$lamp->isOn = true;
//
//echo $lamp->info();
//echo json_encode($lamp);

$user = new User;
echo $user->all();