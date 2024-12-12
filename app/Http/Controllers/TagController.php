<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Tag;

class TagController extends Controller
{
    public function create()
    {
        // Busca todas as tags do banco de dados
        $tags = Tag::all();

        // Retorna a view de criação de histórias com as tags
        return view('historias.create', compact('tags'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
            'tags' => 'array',
        ]);

        // Cria a nova história
        $historia = Historia::create([
            'titulo' => $request->titulo,
            'conteudo' => $request->conteudo,
        ]);

        // Processa as tags
        if ($request->tags) {
            foreach ($request->tags as $tagName) {
                // Verifica se a tag já existe
                $tag = Tag::firstOrCreate(['nome' => $tagName]);
                // Associa a tag à história
                $historia->tags()->attach($tag->id);
            }
        }

    return redirect()->route('historias.index')->with('success', 'História publicada com sucesso!');
    }
}
