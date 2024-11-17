<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historia;
use App\Models\Genero;
use Illuminate\Support\Facades\Storage;

class PublicaController extends Controller
{

    public function create()
    {
        $historia = Historia::create([
            'usuario_id' => auth()->id(),
            'genero_id' => null, // Ou um valor padrão
            'titulo' => '',
            'conteudo' => '',
            'data_postada' => now(),
            'destaque' => 0,
        ]);

        return redirect()->route('edicao', ['id' => $historia->id]);
    }

    public function index($id)
    {
        $generos = Genero::all();  // Busca todos os gêneros
        $historia = Historia::findOrFail($id); // Busca a história pelo ID
        
        return view('edicao', compact('historia'));
    }
    // Armazena apenas o conteúdo da história
    public function storeConteudo(Request $request, $id)
    {
        $request->validate([
            'conteudo' => 'required|string',
        ]);

        $historia = Historia::findOrFail($id);
        $historia->conteudo = $request->input('conteudo');
        $historia->save();

        return redirect()->route('publicar.index', ['id' => $id]);
    }

    // Armazena as outras informações da história
    public function storeHistoria(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:50',
            'classificacao' => 'required|integer',
            'genero' => 'required|string|max:255',
            'descricao' => 'required|string',
            'imagem' => 'nullable|image|max:2048', // 2 MB limite
        ]);

        $historia = Historia::findOrFail($id);

        // Atualiza os outros campos da história
        $historia->titulo = $request->titulo;
        $historia->classificacao = $request->classificacao;
        $historia->genero_id = $request->genero; // ajuste conforme necessário
        $historia->descricao = $request->descricao;

        if ($request->hasFile('imagem')) {
            $path = $request->file('imagem')->store('imagens', 'public');
            $historia->capa = $path;
        }

        $historia->save();

        return redirect()->route('publicar.success')->with('message', 'História publicada com sucesso!');
    }
}
