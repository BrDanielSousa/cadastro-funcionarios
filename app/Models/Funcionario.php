<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Funcionario extends Model
{
    
    protected $table = 'funcionarios';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'id',
        'nome',
        'email',
        'cpf',
        'cargo',
        'dataAdmissao',
        'salario',
    ];

    protected $dates = [
        'dataAdmissao',
        'created_at',
        'updated_at',
    ];

    // Criar UUID automaticamente ao criar um novo registro
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                // Gera UUID versão 4
                $model->id = (string) Str::uuid();
            }
        });
    }
}
