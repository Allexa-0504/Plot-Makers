<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\User;
use App\Models\Historia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $generos = Genero::all(); // Buscando todos os gêneros
        $usuario = auth()->user(); // Obtendo o usuário logado
        // Buscando histórias com destaque
        $historiasDestaque = Historia::where('destaque', 1)->with('usuario')->get(); // Supondo que você tenha um relacionamento com o modelo de Usuário

        return view('pagPrincip', compact('generos', 'usuario', 'historiasDestaque')); // Passando os dados para a view
    }
}