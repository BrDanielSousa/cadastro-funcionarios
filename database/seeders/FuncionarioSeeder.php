<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FuncionarioSeeder extends Seeder
{
    public function run(): void
    {
        $cargos = ['Analista', 'Desenvolvedor', 'Designer', 'Gerente', 'Assistente', 'Coordenador'];

        foreach (range(1, 10) as $i) {
            DB::table('funcionarios')->insert([
                'id' => Str::uuid(),
                'nome' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'cpf' => fake()->unique()->numerify('###########'),
                'cargo' => fake()->jobTitle(),
                'dataAdmissao' => fake()->date(),
                'salario' => fake()->randomFloat(2, 1500, 10000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
