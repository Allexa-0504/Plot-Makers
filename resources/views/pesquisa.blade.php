@extends('layouts.app')

@section('title', 'Plot Makers - Resultados da pesquisa')

@section('content')

        <!-- END header -->

        <section class="site-section pt-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2 class="mb-4">Resultados para: "{{ $query }}"</h2>
                    </div>
                </div>
                <div class="row blog-entries">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="row mb-5 mt-5">
                            @if($historias->isEmpty())
                                <div class="col-md-12">
                                    <p>Nenhuma história encontrada.</p>
                                </div>
                            @else
                                @foreach($historias as $historia)
                                    <div class="col-md-12">
                                        <div class="post-entry-horzontal">
                                            <a href="{{ url('/historia', $historia->id) }}">
                                                <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url('{{ asset('storage/' . $historia->capa) }}');"></div>
                                                <span class="text">
                                                    <div class="post-meta">
                                                        <span class="author mr-2"><img src="{{ asset('storage/' . $historia->usuario->profile_photo_path) }}" alt="Autor" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;">{{ $historia->usuario->name }}</span>&bullet;
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