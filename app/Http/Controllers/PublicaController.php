<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Historia; 
use App\Models\Tag; 
use Illuminate\Http\Request;

class PublicaController extends Controller
{
    public function index(Request $request)
    {
        $conteudo = $request->input('conteudo');
        $generos = Genero::all(); // Buscando todos os gêneros
        $tags = Tag::all(); // Buscando todas as tags

        return view('publicar', compact('conteudo', 'generos', 'tags'));
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:50',
            'genero_id' => 'required|exists:generos,id',
            'conteudo' => 'required|string',
            'descricao' => 'nullable|string',
            'capa' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'array',
        ]);

        // Criação da história
        $historia = new Historia();
        $historia->titulo = $request->titulo;
        $historia->genero_id = $request->genero_id;
        $historia->conteudo = $request->conteudo;
        $historia->descricao = $request->descricao;
        $historia->usuario_id = auth()->id();
        $historia->data_postada = now(); 
        $historia->destaque = rand(0, 1); 

        // Salvar a imagem de capa
        if ($request->hasFile('capa')) {
            $capaPath = $request->file('capa')->store('capas', 'public');
            $historia->capa = $capaPath;
        }

        $historia->save();

        // Processar as tags
        if ($request->has('tags')) {
            foreach ($request->tags as $tagName) {
                // Verifica se a tag já existe ou cria uma nova
                $tag = Tag::firstOrCreate(['nome' => $tagName]);
                // Associa a tag à história
                $historia->tags()->attach($tag->id);
            }
        }

        return redirect()->route('publicar.index')->with('success', 'História publicada com sucesso!');
    }
    public function createTag(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:50|unique:tags,nome',
        ]);

        $tag = new Tag();
        $tag->nome = $request->nome;
        $tag->save();

        return response()->json($tag);
    }

    public function edit($id)
    {
        $historia = Historia::findOrFail($id);

        // Verifica se o usuário logado é o autor da história
        if ($historia->usuario_id !== auth()->id()) {
            return redirect()->route('pagPrincip')->with('error', 'Você não tem permissão para editar esta história.');
        }

        $generos = Genero::all(); // Buscando todos os gêneros
        $tags = Tag::all();
        return view('editarHis', compact('historia', 'generos','tags'));
    }
    public function pesquisar(Request $request)
    {
        $query = $request->input('query');

        // Pesquisar histórias pelo título ou tags
        $historias = Historia::where('titulo', 'LIKE', "%{$query}%")
            ->orWhereHas('tags', function ($q) use ($query) {
                $q->where('nome', 'LIKE', "%{$query}%");
            })
            ->get();

        // Retornar a view com os resultados da pesquisa
        return view('pesquisa', compact('historias', 'query'));
    }

    public function update(Request $request, $id)
    {
        $historia = Historia::findOrFail($id);

        // Verifica se o usuário logado é o autor da história
        if ($historia->usuario_id !== auth()->id()) {
            return redirect()->route('pagPrincip')->with('error', 'Você não tem permissão para editar esta história.');
        }

        // Validação dos dados
        $request->validate([
            'titulo' => 'required|string|max:50',
            'genero_id' => 'required|exists:generos,id',
            'conteudo' => 'required|string',
            'descricao' => 'nullable|string',
            'capa' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validação da imagem
            'tags' => 'array', // Certifique-se de que as tags são um array
        ]);

        // Atualizar os dados da história
        $historia->titulo = $request->titulo;
        $historia->genero_id = $request->genero_id;
        $historia->conteudo = $request->conteudo;
        $historia->descricao = $request->descricao;

        // Processar a imagem de capa se fornecida
        if ($request->hasFile('capa')) {
            $capaPath = $request->file('capa')->store('capas', 'public');
            $historia->capa = $capaPath; // Atualiza o caminho da imagem de capa
        }

        $historia->save();

        // Atualizar as tags
        if ($request->has('tags')) {
            // Sincroniza as tags com a história
            $historia->tags()->sync($request->tags);
        } else {
            // Se não houver tags, desvincula todas
            $historia->tags()->detach();
        }

        return redirect()->route('pagPrincip')->with('success', 'História atualizada com sucesso!');
    }

    public function destroy($id)
    {
        $historia = Historia::findOrFail($id);

        // Verifica se o usuário logado é o autor da história
        if ($historia->usuario_id !== auth()->id()) {
            return redirect()->route('perfil')->with('error', 'Você não tem permissão para excluir esta história.');
        }

        // Exclui a história
        $historia->delete();

        return redirect()->route('perfil')->with('success', 'História excluída com sucesso!');
    }
}