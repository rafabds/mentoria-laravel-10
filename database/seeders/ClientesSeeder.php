<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Rafa',
            'email' => 'rafa_bs02@hotmail.com',
            'cidade' => 'Seila',
            'logradouro' => 'Rua Professor Hasegawa',
            'cep' => '08260090',
            'bairro' => 'colonia',
        ]);

        Cliente::create([
            'nome' => 'Rafa03',
            'email' => 'rafa_bs03@hotmail.com',
            'cidade' => 'Seila',
            'logradouro' => 'Rua Professor Hasegawa',
            'cep' => '08260090',
            'bairro' => 'colonia',
        ]);
    }
}
