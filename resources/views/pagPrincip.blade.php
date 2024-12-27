@extends('layouts.app')

@section('title', 'Plot Makers - Página Principal')

@section('content')
<section class="site-section py-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&nbsp</p> <br>
                <h2 class="mb-4">Postagens em destaque</h2>
            </div>
        </div>
        <div class="row blog-entries">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="row">
                    @foreach($historiasDestaque as $historia)
                        <div class="col-md-6">
                        <a href="{{ url('/historia', $historia->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="{{ asset('storage/' . $historia->capa) }}" alt="Imagem de capa">
                                <div class="blog-content-body">
                                    <div class="post-meta">
                                        <span class="author mr-2">{{ $historia->usuario->name }}</span>&bullet; 
                                        <span class="mr-2">{{ $historia->created_at->format('d/m/Y') }}</span> &bullet; 
                                    </div>
                                    <h2>{!! Str::limit($historia->titulo, 100) !!}</h2> <br>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <nav aria-label="Page navigation" class="text-center">
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">&lt;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-4 sidebar">
                <div class="sidebar-box">
                    <div class="bio text-center">
                        <img src="{{ $usuario->profile_photo_path ? asset('storage/' . $usuario->profile_photo_path) : asset('template/images/OIP.jpg') }}" alt="Image Placeholder" class="img-fluid">
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
                            <li>
                                <a href="{{ route('genero.show', $genero->id) }}">
                                    {{ $genero->nome }} <span>({{ $genero->postagens_count }})</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection