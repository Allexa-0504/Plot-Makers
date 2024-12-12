<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Editor de Texto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('template/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('template/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/fonts/flaticon/font/flaticon.css')}}">
    <link rel="icon" type="image/png" href="{{asset('template/images/logoTcc (1).png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tom-select@latest/dist/css/tom-select.css">

    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/css/stylePurple.css')}}">

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
                        <div class="col-3 search-top">
                            <a href="{{url('/pagPrincip')}}">
                                <img src="{{asset('template/images/logoTcc__1_-removebg-preview.png')}}" alt="" class="imageLogo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5" style="margin-left: 40px;"> Configurações de texto</h3>
                <form id="meuFormulario" action="{{ url('/publicar/store') }}" method="POST" class="p-5 bg-light" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="titulo">Título *</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="genero_id">Gênero *</label>
                        <select class="form-control" id="genero_id" name="genero_id" required>
                            <option value="">Selecione um gênero</option>
                            @foreach($generos as $genero)
                                <option value="{{ $genero->id }}">{{ $genero->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="desc">Descrição *</label>
                        <textarea name="descricao" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="capa">Imagem de Capa *</label>
                        <input type="file" class="form-control" id="capa" name="capa" accept="image/*" required>
                    </div>

                    <div class="form-group">
                        <label for="novaTag">Adicionar Nova Tag:</label>
                        <input type="text" id="novaTag" class="form-control" placeholder="Digite uma nova tag" />
                        <button type="button" id="adicionarTag" class="btn btn-secondary mt-2">Adicionar Tag</button>
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags:</label>
                        <select id="tags" name="tags[]" multiple>
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <input type="hidden" name="conteudo" value="{{ old('conteudo', $conteudo) }}">
                    <div class="form-group">
                        <input type="submit" value="Postar Texto" class="btn btn-primary" style="margin-top: 25px;">
                    </div>
                </form>

                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/tom-select@latest/dist/js/tom-select.complete.min.js"></script>

                <script>
                    $(document).ready(function() {
                        const tomSelect = new TomSelect('#tags', {
                            create: true,
                            placeholder: 'Selecione ou crie tags',
                            onItemAdd: function(value) {
                                if (!this.options[value]) {
                                    $.ajax({
                                        url: '{{ route('tags.create') }}',
                                        method: 'POST',
                                        data: {
                                            nome: value,
                                            _token: '{{ csrf_token() }}'
                                        },
                                        success: function(tag) {
                                            tomSelect.addOption({ value: tag.id, text: tag.nome });
                                            tomSelect.addItem(tag.id);
                                        },
                                        error: function(xhr) {
                                            console.error('Erro ao criar tag:', xhr);
                                        }
                                    });
                                } else {
                                    tomSelect.addItem(value);
                                }
                            }
                        });

                        $('#adicionarTag').on('click', function() {
                            const novaTag = $('#novaTag').val().trim();
                            if (novaTag) {
                                tomSelect.addOption({ value: novaTag, text: novaTag });
                                tomSelect.addItem(novaTag);
                                $('#novaTag').val('');
                            }
                        });

                        $('#meuFormulario').on('input change', function() {
                            const formData = {
                                titulo: $('#titulo').val(),
                                genero_id: $('#genero_id').val(),
                                descricao: $('#desc').val(),
                                capa: $('#capa').val(),
                                tags: tomSelect.getValue(),
                                novaTag: $('#novaTag').val()
                            };
                            localStorage.setItem('formData', JSON.stringify(formData));
                        });

                        const savedData = JSON.parse(localStorage.getItem('formData'));
                        if (savedData) {
                            $('#titulo').val(savedData.titulo);
                            $('#genero_id').val(savedData.genero_id);
                            $('#desc').val(savedData.descricao);
                            $('#capa').val(savedData.capa);
                            tomSelect.setValue(savedData.tags);
                            $('#novaTag').val(savedData.novaTag);
                        }

                        $('#meuFormulario').on('submit', function() {
                            localStorage.removeItem('formData');
                        });
                    });
                </script>
            </div>

            <div id="loader" class="show fullscreen">
                <svg class="circular" width="48px" height="48px">
                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6f42c1"/>
                </svg>
            </div>

            <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('template/js/jquery.stellar.min.js')}}"></script>
            <script src="{{asset('template/js/main.js')}}"></script>
        </body>
    </html>