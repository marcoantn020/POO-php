<?php
declare(strict_types=1);

require "../vendor/autoload.php";

class User {

    public function __construct(
        public string $name,
        public int $age
    ){}

    public function info()
    {
        return "Meu nome é $this->name, e minha idade $this->age";
    }
}

class User2 extends User {


    public function __construct(
        $name, $age,
        public string $profession
    )
    {
        parent::__construct($name, $age);
    }

    public function getProfession()
    {
        return "<br /> minha profissão é $this->profession";
    }

}

$user = new User2(name: "Marco", age: 32, profession: "Jubileu");
echo $user->info();
echo $user->getProfession();