@extends('layouts.app')

@section('title', 'Plot Makers - {{ $historia->titulo }}')

@section('content')

        <section class="site-section py-lg">
            <div class="container">
                <div class="row blog-entries element-animate">
                    <div class="col-md-12 col-lg-8 main-content">
                        <img src="{{ asset('storage/' . $historia->capa) }}" alt="Imagem de capa" class="img-fluid mb-5">
                        <div class="post-meta">
                            <span class="author mr-2"><img src="{{asset('template/images/OIP.jpg')}}" alt="Autor" class="mr-2"> {{ $historia->usuario->name }}</span>&bullet;
                            <span class="mr-2">{{ $historia->data_postada->format('d/m/Y') }}</span> &bullet; 
                            <span class="ml-2"><span class="fa fa-comments"></span> {{ $historia->comentarios->count() }}</span>
                        </div>
                        <h1 class="mb-4">{{ $historia->titulo }}</h1>
                        <div class="tags mb-5">
                            @if($historia->tags->isNotEmpty())
                                @foreach($historia->tags as $tag)
                                    <div class="category mb-5">{{ $tag->nome }}</div>
                                @endforeach
                            @else
                                <div class="category mb-5">Nenhuma tag disponível.</div>
                            @endif
                        </div>

                        <div class="post-content-body">
                            <p>{!! $historia->conteudo !!}</p>
                        </div>

                        <div class="pt-5">
                            <p>Gênero textual: <a href="#">{{ $historia->genero->nome }}</a></p>
                        </div>

                        <div class="pt-5">
                    <h3 class="mb-5">Comentários</h3>
                    <ul class="comment-list">
                        @if(isset($comentarios) && $comentarios->isNotEmpty())
                        @foreach($comentarios as $comentario)
                            <li class="comment" id="comment-{{ $comentario->id }}">
                                <div class="vcard">
                                    <img src="{{ asset('template/images/OIP.jpg') }}" alt="manter essa imagem">
                                </div>
                                <div class="comment-body">
                                    <h3>{{ $comentario->usuario->name }}</h3>
                                    <div class="meta">{{ $comentario->data_post }}</div>
                                    <p>Avaliação: {{ $comentario->avaliacao }}</p>
                                    <p>{{ $comentario->conteudo }}</p>
                                    @if($comentario->usuario_id === auth()->id())
                                        <p>
                                            <button class="btn btn-warning edit-comment" data-comment-id="{{ $comentario->id }}">Editar</button>
                                            <form action="{{ route('comentarios.destroy', $comentario->id) }}" method="POST" style="display:inline;" class="delete-comment-form">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger delete-comment" onclick="return confirm('Tem certeza que deseja excluir este comentário?');">Excluir</button>
                                            </form>
                                        </p>
                                    @endif
                                </div>

                                <!-- Formulário de edição oculto -->
                                <div class="edit-form" id="edit-form-{{ $comentario->id }}" style="display: none;">
                                    <form action="{{ route('comentarios.update', $comentario->id) }}" method="POST" class="edit-comment-form">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="conteudo">Conteúdo</label>
                                            <textarea class="form-control" name="conteudo" required>{{ old('conteudo', $comentario->conteudo) }}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="avaliacao">Avaliação</label>
                                            <input type="number" class="form-control" name="avaliacao" value="{{ old('avaliacao', $comentario->avaliacao) }}" min="1" max="10" required>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Atualizar Comentário</button>
                                        <button type="button" class="btn btn-secondary cancel-edit">Cancelar</button>
                                    </form>
                                </div>
                            </li>
                        @endforeach
                        @else
                            <li class="comment">Nenhum comentário encontrado.</li>
                        @endif
                    </ul>
                </div>
                    

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Escrever Comentário</h3>
                                <form action="{{ route('comentarios.store', $historia->id) }}" method="POST" class="p-5 bg-light">
                                    @csrf
                                    <div class="form-group">
                                        <label for="avaliacao">Avaliação (1 a 10)</label>
                                        <input type="number" name="avaliacao" id="avaliacao" min="1" max="10" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <textarea name="conteudo" id="message" cols="30" rows="10" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Enviar Comentário" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- END main-content -->

                    <!-- END sidebar -->
                </div>
            </div>
        </section>
        <!-- END section -->

@endsection