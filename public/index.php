<?php
declare(strict_types=1);

require "../vendor/autoload.php";

class User {

    public static function info()
    {
        return __CLASS__;
    }

    public static function test()
    {
         var_dump(self::info());
         var_dump(static::info());
    }
}

class User2 extends User {

    public static function info()
    {
        return parent::info();
    }
    
}

echo User2::info();