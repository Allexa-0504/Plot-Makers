<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use App\Models\Historia; 
use App\Models\Tag; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicaController extends Controller
{
    public function index(Request $request)
    {
        $conteudo = $request->input('conteudo');
        $generos = Genero::all(); // Buscando todos os gêneros
        $tags = Tag::all(); // Buscando todas as tags

        // Filtrar histórias para não incluir aquelas com genero_id igual a 11
        $historiasDestaque = Historia::where('genero_id', '!=', 11)->get();

        return view('publicar', compact('conteudo', 'generos', 'tags', 'historiasDestaque'));
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
        //Alert::success('Publicado!', 'Texto publicado com sucesso!');

        return redirect()->route('publicar.index');
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
            //Alert::error('Erro!', 'Você não tem permisão para editar essa história');
            return redirect()->route('pagPrincip');
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
            //Alert::error('Erro!', 'Você não tem permisão para editar essa história');
            return redirect()->route('pagPrincip');
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

        //Alert::success('Atualizado!', 'Texto atualizado com sucesso!');

        return redirect()->route('pagPrincip');
    }

    public function destroy($id)
    {
        $historia = Historia::findOrFail($id);

        // Verifica se o usuário logado é o autor da história
        if ($historia->usuario_id !== auth()->id()) {
            //Alert::error('Erro!', 'Você não tem permisão para excluir essa história');
            return redirect()->route('perfil');
        }

        // Exclui a história
        $historia->delete();

        //Alert::success('Excluído!', 'Texto excluído com sucesso!');

        return redirect()->route('perfil');
    }

    public function historiasDicasEscrita()
    {
        $genero = Genero::findOrFail(11);
        $historias = Historia::where('genero_id', 11)->with('usuario', 'tags')->get();

        // Adicione esta linha para depurar
        //dd($historias);

        return view('dicas', compact('genero', 'historias'));
    }

    public function pesquisarDicas(Request $request)
    {
        $query = $request->input('query');

        // Pesquisar histórias com genero_id igual a 11
        $historias = Historia::where('genero_id', 11)
            ->where('titulo', 'LIKE', "%{$query}%")
            ->orWhere('conteudo', 'LIKE', "%{$query}%")
            ->with('usuario', 'tags')
            ->get();

        return view('dicas', compact('historias'));
    }

    public function todasHistorias()
    {
        // Buscar todas as histórias, exceto aquelas com genero_id igual a 11
        $historias = Historia::where('genero_id', '!=', 11)
            ->with('usuario', 'tags') // Carregar usuário e tags relacionadas
            ->get();

        return view('historias.index', compact('historias'));
    }
}