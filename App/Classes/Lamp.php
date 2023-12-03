<?php

namespace App\Classes;

class Lamp extends Product
{
    public bool $isOn = false;

    public function info()
    {
        $lampIs = $this->isOn === true ? 'acessa' : 'apagada';
        return "A lampada: $this->name esta $lampIs.";
    }
}