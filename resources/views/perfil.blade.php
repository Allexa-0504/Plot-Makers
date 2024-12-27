@extends('layouts.app')

@section('title', 'Plot Makers - Perfil')

@section('content')

        <section class="site-section">
            <div class="container">
                <div class="sidebar-box">
                <div class="bio text-center">
                    <img src="{{ $usuario->profile_photo_path ? asset('storage/' . $usuario->profile_photo_path) : asset('template/images/OIP.jpg') }}" alt="Image Placeholder" class="img-fluid">
                    <div class="bio-body">
                        <h2>{{ $usuario->name }}</h2> <!-- Nome do usuário logado -->
                    </div>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </div>
                </div>
                <!-- Adicione este botão na seção de informações do perfil -->
                <div class="card">
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Informações</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="username" class="form-control-label">Nome de usuário</label>
                                    <input class="form-control" type="text" id="username" value="{{ $usuario->name }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="form-control-label">Email</label>
                                    <input class="form-control" type="email" id="email" value="{{ $usuario->email }}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="stories_count" class="form-control-label">Quantidade de histórias publicadas</label>
                                    <input class="form-control" type="number" id="stories_count" value="{{ $usuario->historias->count() }}" disabled>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('perfil.edit') }}" class="btn btn-secondary">Editar Perfil</a> <!-- Link para editar perfil -->
                    </div>
                </div>

                <!-- Seção para listar as histórias publicadas -->
                <div class="mt-5">
                    <h2 class="text-center">Histórias Publicadas</h2>
                    <div class="row">
                        @foreach($usuario->historias->sortByDesc('created_at') as $historia)
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <img src="{{ asset('storage/' . $historia->capa) }}" class="card-img-top" alt="{{ $historia->titulo }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $historia->titulo }}</h5>
                                        <p class="card-text">{!! Str::limit($historia->conteudo, 100) !!}</p>
                                        <a href="{{ route('historia.show', $historia->id) }}" class="btn btn-primary">Visualisar</a>
                                        @if ($historia->usuario_id === Auth::id())
                                            <a href="{{ route('historias.edit', $historia->id) }}" class="btn btn-primary">Editar</a>
                                            <form action="{{ route('historias.destroy', $historia->id) }}" method="POST" style="display: flex; margin-top: 5px;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Excluir</button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
@endsection