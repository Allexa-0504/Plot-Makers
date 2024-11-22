<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Historia; 
use Illuminate\Http\Request;

class PublicaController extends Controller
{
    public function index(Request $request)
    {
        $conteudo = $request->input('conteudo');
        $generos = Genero::all(); // Buscando todos os gêneros

        return view('publicar', compact('conteudo', 'generos'));
    }

    public function store(Request $request)
    {
        //dd(auth()->user()); 
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para publicar uma história.');
        }
        
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:50',
            //'classificacao' => 'required|integer',
            'genero_id' => 'required|exists:generos,id',
            'conteudo' => 'required|string',
            'descricao' => 'nullable|string',
            'capa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação da imagem
        ]);

        // Processar a imagem de capa
        $capaPath = null;
        if ($request->hasFile('capa')) {
            $capaPath = $request->file('capa')->store('capas', 'public'); // Armazena a imagem na pasta 'storage/app/public/capas'
    }

        // Criar a nova história
        $historia = new Historia();
        $historia->titulo = $request->titulo;
        //$historia->classificacao = $request->classificacao;
        $historia->genero_id = $request->genero_id;
        $historia->conteudo = $request->conteudo;
        $historia->descricao = $request->descricao;
        $historia->capa = $capaPath; // Salvar o caminho da imagem de capa
        $historia->usuario_id = auth()->id(); // ID do usuário autenticado
        $historia->data_postada = now(); 
        $historia->destaque = rand(0, 1);
        $historia->save();

        return redirect()->route('publicar.index')->with('success', 'História publicada com sucesso!');
    }
}