<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ['nome' => 'Dialógo'],

            // Adicione mais gêneros conforme necessário
        ];

        // Insere os gêneros na tabela 'genero'
        DB::table('generos')->insert($generos);
    }
}
