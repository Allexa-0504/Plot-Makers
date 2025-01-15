@extends('layouts.app')

@section('title', 'Plot Makers - Página Principal')

@section('content')
<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                &nbsp <br/>
                <h2 class="mb-4">Postagens em destaque</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    @foreach($historiasDestaque as $historia)
                        <div class="col-12 col-md-6 mb-4"> <!-- Adicionando mb-4 para espaçamento -->
                            <a href="{{ url('/historia', $historia->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="{{ asset('storage/' . $historia->capa) }}" alt="Imagem de capa" class="img-fluid"> <!-- Adicionando img-fluid -->
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="author mr-2">{{ $historia->usuario->name }}</span>&bullet; 
                                        <span class="mr-2">{{ $historia->created_at->format('d/m/Y') }}</span> &bullet; 
                                    </div>
                                    <h2>{!! Str::limit($historia->titulo, 100) !!}</h2>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="{{ $usuario->profile_photo_path ? asset('storage/' . $usuario->profile_photo_path) : asset('template/images/OIP.jpg') }}" alt="Image Placeholder" class="img-fluid"> <!-- Adicionando img-fluid -->
                        <div class="bio-body">
                            <h2>{{ $usuario ? $usuario->name : 'Visitante' }}</h2>
                            <p><a href="{{ url('/perfil') }}" class="btn btn-primary btn-sm rounded">Perfil</a></p>
                        </div>
                    </div>
                </div>

                <div class="sidebar-box">
                    <h3 class="heading">Gêneros Literários</h3>
                    <ul class="categories">
                        @foreach($generos as $genero)
                            @if($genero->id != 11) <!-- Verifica se o id do gênero não é 11 -->
                                <li>
                                    <a href="{{ route('genero.show', $genero->id) }}">
                                        {{ $genero->nome }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection