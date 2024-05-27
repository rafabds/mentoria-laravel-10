<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    public function run(): void
    {
        Venda::create(
            [
                'numero_da_venda' => '1',
                'produto_id' => '2',
                'cliente_id' => '1',
            ]
        );

        Venda::create(
            [
                'numero_da_venda' => '2',
                'produto_id' => '3',
                'cliente_id' => '2',
                ]
        );

        Venda::create(
            [
                'numero_da_venda' => '3',
                'produto_id' => '2',
                'cliente_id' => '2',
                ]
        );
        Venda::create(
            [
                'numero_da_venda' => '4',
                'produto_id' => '1',
                'cliente_id' => '2',
                ]
        );
    }
}
