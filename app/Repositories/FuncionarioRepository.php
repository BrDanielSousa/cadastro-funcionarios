<?php

namespace App\Repositories;

use App\Models\Funcionario;

class FuncionarioRepository
{
    public function all()
    {
        return Funcionario::all();
    }

    public function find($id)
    {
        return Funcionario::findOrFail($id);
    }

    public function create(array $data)
    {
        return Funcionario::create($data);
    }

    public function update($id, array $data)
    {
        $funcionario = $this->find($id);
        $funcionario->update($data);
        return $funcionario;
    }

    public function delete($id)
    {
        $funcionario = $this->find($id);
        return $funcionario->delete();
    }
}
