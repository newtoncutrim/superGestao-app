<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteContato::create([
            'nome' => 'site',
            'email' => 'site.com.br',
            'telefone' => '98984212805', 'motivo_contato' => 1,
            'mensagem' => 'preciso de ajuda'
        ]);
    }
}
