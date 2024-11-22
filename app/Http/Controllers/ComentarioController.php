<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public function show($id)
    {
        $historia = Historia::with(['usuario', 'genero', 'comentarios.usuario'])->findOrFail($id);

        // dd($historia->comentarios); // Isso deve retornar os comentários

        foreach ($historia->comentarios as $comentario) {
            $comentario->data_post = \Carbon\Carbon::parse($comentario->data_post)->format('d/m/Y H:i');
        }

        return view('historia.show', [
            'historia' => $historia,
            'comentarios' => $historia->comentarios 
        ]);
    }

    public function store(Request $request, $historiaId)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Você precisa estar logado para comentar.');
        }

        $request->validate([
            'conteudo' => 'required|string|max:500',
            'avaliacao' => 'required|integer|between:1,10',
        ]);

        Comentario::create([
            'usuario_id' => auth()->id(),
            'historia_id' => $historiaId,
            'conteudo' => $request->conteudo,
            'data_post' => now(),
            'avaliacao' => $request->avaliacao,
        ]);

        return redirect()->route('historia.show', $historiaId)->with('success', 'Comentário enviado com sucesso!');
    }
}