<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Tag;

class HistoriaController extends Controller
{
    public function index (){
        return view('blog-single');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $historia = Historia::with(['usuario', 'genero', 'comentarios.usuario', 'tags'])->findOrFail($id);
        $historia->data_postada = \Carbon\Carbon::parse($historia->data_postada);

        // Formatar a data dos comentários
        foreach ($historia->comentarios as $comentario) {
            $comentario->data_post = \Carbon\Carbon::parse($comentario->data_post)->format('d/m/Y H:i');
        }

        return view('blog-single', [
            'historia' => $historia,
            'comentarios' => $historia->comentarios // Passando os comentários diretamente da história
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
