<?php
namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Historia; // Supondo que você tenha um modelo Historia
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    public function show($id)
    {
        // Obter o gênero pelo ID
        $genero = Genero::findOrFail($id);

        // Obter as histórias relacionadas a esse gênero, ordenadas da mais recente para a mais antiga
        $historias = Historia::where('genero_id', $id) // Supondo que você tenha uma coluna genero_id na tabela historias
            ->orderBy('created_at', 'desc')
            ->get();

        return view('genero.show', compact('genero', 'historias'));
    }
}