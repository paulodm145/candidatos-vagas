<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vagas')->insert([
                [
                    'descricao' => 'Vaga de Desenvolvedor PHP',
                    'status' => 'ATIVA',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'descricao' => 'Vaga de Desenvolvedor Java',
                    'status' => 'ATIVA',
                    'created_at' => now(),
                    'updated_at' => now()
                ], [
                    'descricao' => 'Vaga de Desenvolvedor Python',
                    'status' => 'ATIVA',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
