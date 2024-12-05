@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar Comentário</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('comentarios.update', $comentario->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="conteudo">Conteúdo</label>
            <textarea class="form-control" id="conteudo" name="conteudo" required>{{ old('conteudo', $comentario->conteudo) }}</textarea>
        </div>

        <div class="form-group">
            <label for="avaliacao">Avaliação</label>
            <input type="number" class="form-control" id="avaliacao" name="avaliacao" value="{{ old('avaliacao', $comentario->avaliacao) }}" min="1" max="10" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Comentário</button>
    </form>
</div>
@endsection