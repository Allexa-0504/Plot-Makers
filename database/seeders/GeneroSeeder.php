<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            ['nome' => 'Romance'],
            ['nome' => 'Poema'],
            ['nome' => 'Conto'],
            ['nome' => 'Dissertação'],
            ['nome' => 'Prosa'],
            ['nome' => 'Novela'],
            ['nome' => 'Fábula'],
            ['nome' => 'Ensaio'],
            ['nome' => 'Epístola'],
            ['nome' => 'Diálogo'],
            ['nome' => 'Dica de escrita'],
            // Adicione mais gêneros conforme necessário
        ];

        // Insere os gêneros na tabela 'generos'
        DB::table('generos')->insert($generos);
    }
}
