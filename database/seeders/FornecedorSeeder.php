<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'teste',
            'uf' => 'ma',
            'email' => 'newton@gmail.com',
            'site' => 'qualquer.com.br'
        ]);
    }
}
