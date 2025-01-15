@extends('layouts.app')

@section('title', 'Plot Makers - Dicas de Escrita')

@section('content')
<section class="site-section pt-5">
    <div class="container">
        <h2 class="mb-4">Dicas de Escrita</h2>
        <div class="row mb-4">
            <div class="col-12 col-md-4 search-top mb-3 mb-md-0"> <!-- Ajuste para col-md-4 -->
                <form action="{{ route('pesquisar.dicas') }}" method="GET" class="search-top-form" style="width: 100%;">
                    <div class="input-group">
                        <input type="text" name="query" id="s" class="form-control" placeholder="Pesquisar dicas..." style="background-color: #CECECE;" required>
                        <button type="submit" class="btn btn-outline-secondary" style="display: none;"></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row mb-5 mt-5">
                    @if($historias->isEmpty())
                        <div class="col-md-12">
                            <p>Nenhuma dica de escrita encontrada.</p>
                        </div>
                    @else
                        @foreach($historias as $historia)
                            <div class="col-12 mb-4"> <!-- Use col-12 para garantir que ocupa toda a largura -->
                                <div class="post-entry-horzontal">
                                    <a href="{{ url('/historia', $historia->id) }}">
                                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url('{{ asset('storage/' . $historia->capa) }}');"></div>
                                        <span class="text">
                                            <div class="post-meta">
                                                <span class="author mr-2">
                                                    <img src="{{ asset('storage/' . $historia->usuario->profile_photo_path) }}" alt="Autor" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;">
                                                    {{ $historia->usuario->name }}
                                                </span>&bullet;
                                                <span class="mr-2">{{ $historia->created_at->format('d/m/Y') }}</span> &bullet;
                                                <span class="mr-2">Tags: {{ implode(', ', $historia->tags->pluck('nome')->toArray()) }}</span>
                                                <span class="ml-2"><span class="fa fa-comments"></span> {{ $historia->comentarios_count }}</span>
                                            </div>
                                            <h2>{{ $historia->titulo }}</h2>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection