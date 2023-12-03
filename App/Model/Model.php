<?php

namespace App\Model;

# descobrir se é uma herança
# é um
# model é um user/product? não
# user/product é um model? sim

class Model
{

    public function all()
    {
       return "listar todos da tabela $this->table";
    }

    public function findBy()
    {
       return "listar um da tabela $this->table";
    }

    public function create()
    {
       return "criar um da tabela $this->table";
    }

    public function update()
    {
       return "atualizar um da tabela $this->table";
    }

    public function delete()
    {
       return "deletar um da tabela $this->table";
    }
}