<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Editar História</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{asset('template/images/logoTcc (1).png')}}">

    <!-- Adicionando o TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/d4vqpyrvlfvi7twx1sort0x4jt8otg57nab1qg24c7yzotsg/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#conteudo', // Seletor do textarea
            plugins: 'lists link image preview',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist outdent indent | link image | preview',
            height: 300
        });
    </script>
</head>

<body>
    <div class="wrap">
        <header role="banner">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-9 social">
                            <a href="https://twitter.com/PlotMakers"><span class="fa fa-twitter"></span></a>
                            <a href="https://www.instagram.com/plot_makers/"><span class="fa fa-instagram"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="comment-form-wrap pt-5">
            <h3 class="mb-5" style="margin-left: 5px;">Editar História</h3>
            <form action="{{ url('/historias/' . $historia->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Método PUT para atualização -->
                
                <div class="form-group" style="width: 76vw; justify-content: center;">
                    <label for="titulo" style="display: flex; align-self: flex-start; margin-left: 5px;">Título *</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $historia->titulo }}" style="height: 45px; align-self: flex-end; margin-left: 55px;" required>
                </div>

                <div class="form-group" style="width: 76vw; justify-content: center;">
                    <label for="genero_id" style="display: flex; align-self: flex-start; margin-left: 5px;">Gênero *</label>
                    <select class="form-control" id="genero_id" name="genero_id" style="height: 45px; align-self: flex-end; margin-left: 55px;" required>
                        <option value="">Selecione um gênero</option>
                        @foreach($generos as $genero)
                            <option value="{{ $genero->id }}" {{ $genero->id == $historia->genero_id ? 'selected' : '' }}>{{ $genero->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="width: 76vw; justify-content: center;">
                    <label for="desc" style="display: flex; align-self: flex-start; margin-left: 5px;">Descrição *</label>
                    <textarea name="descricao" id="desc" cols="30" rows="10" class="form-control" style="align-self: flex-end; margin-left: 55px;">{{ $historia->descricao }}</textarea>
                </div>

                <div class="form-group" style="width: 76vw; justify-content: center;">
                    <label for="conteudo" style="display: flex; align-self: flex-start; margin-left: 5px;">Conteúdo *</label>
                    <textarea name="conteudo" id="conteudo" cols="30" rows="10" class="form-control" style="align-self: flex-end; margin-left: 55px;">{{ $historia->conteudo }}</textarea>
                </div>

                <div class="form-group" style="width: 76vw; justify-content: center;">
                    <label for="capa" style="display: flex; align-self: flex-start; margin-left: 5px;">Imagem de Capa *</label>
                    <input type="file" class="form-control" id="capa" name="capa" style="height: 45px; align-self: flex-end; margin-left: 55px;" accept="image/*">
                    <small style="margin-left: 55px;">Obs: Deixe em branco caso não queira alterar a imagem de capa.</small>
                </div>

                
                <div class="form-group">
                    <input type="submit" value="Atualizar História" class="btn btn-primary" style="margin-top: 25px; margin-left: 10px; margin-bottom: 10px;">
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
</body>

</html>