<?php

namespace App\Classes;

class Book extends Product
{
    public string $author;
    public int $pages;

    public function info()
    {
        return "O livro $this->name, do autor $this->author tem $this->pages paginas";
    }
}