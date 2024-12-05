<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - {{ $historia->titulo }}</title>
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

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
</head>

<body>

    <div class="fab" ontouchstart="">
        <form action="{{url('/edicao')}}">
            <button class="main" style="width: 70px; height: 70px; border-radius: 50%;">
                <img src="{{asset('template/images/caneta-de-pena.png')}}" alt="" class="image-button">
            </button>
        </form>
    </div>

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
                            <form action="#" class="search-top-form">
                                <span class="icon fa fa-search"></span>
                                <input type="text" id="s" placeholder="Digite para pesquisar...">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <h1 class="site-logo">
                            <a href="{{url('/pagPrincip')}}"><img src="{{asset('template/images/headerTcc__1_-removebg-preview.png')}}" alt=""></a>
                        </h1>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/pagPrincip')}}">Página Principal</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('/dicas')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dicas de escrita</a>
                                <div class="dropdown-menu aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Personagens</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Capítulos</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Estrutura</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Desenvolvimento</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Plots</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Outros</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/about')}}">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/perfil')}}">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->

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

        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3>Sobre</h3>
                        <p class="mb- 4">
                            <img src="{{asset('template/images/logoTcc.png')}}" alt="Logo Plot Makers" class="img-fluid">
                        </p>
                        <p>Ajudando escritores iniciantes a começarem a trilhar seu caminho no mundo da escrita.</p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="mb-5">
                                    <h3>Links Rápidos</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="{{url('/about')}}">Sobre nós</a></li>
                                        <li><a href="{{url('/dicas')}}">Dicas de Escrita</a></li>
                                        <li><a href="{{url('/perfil')}}">Perfil</a></li>
                                        <li><a href="{{url('/pagPrincip')}}">Página Principal</a></li>
                                    </ul>
                                </div>
                                <div class="mb-5">
                                    <h3>Social</h3>
                                    <ul class="list-unstyled footer-social">
                                        <li><a href="https://twitter.com/PlotMakers"><span class="fa fa-twitter"></span> Twitter</a></li>
                                        <li><a href="https://www.instagram.com/plot_makers/"><span class="fa fa-instagram"></span> Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="small">
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END footer -->

    </div>

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6f42c1"/></svg></div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mostrar o formulário de edição
            document.querySelectorAll('.edit-comment').forEach(button => {
                button.addEventListener('click', function () {
                    const commentId = this.getAttribute('data-comment-id');
                    const editForm = document.getElementById('edit-form-' + commentId);
                    editForm.style.display = 'block'; // Mostra o formulário
                });
            });

            // Ocultar o formulário de edição
            document.querySelectorAll('.cancel-edit').forEach(button => {
                button.addEventListener('click', function () {
                    const editForm = this.closest('.edit-form');
                    editForm.style.display = 'none'; // Esconde o formulário
                });
            });
        });
    </script>
    <script src="{{asset('template/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('template/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>