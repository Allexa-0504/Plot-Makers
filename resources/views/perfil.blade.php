<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('template/images/logoTcc (1).png') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
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
                            <a href="{{ asset('/pagPrincip') }}"><img src="{{ asset('template/images/headerTcc__1_-removebg-preview.png') }}" alt=""></a>
                        </h1>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/pagPrincip') }}">Página Principal</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('/dicas') }}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dicas de escrita</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Personagens</a>
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Capítulos</a>
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Estrutura</a>
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Desenvolvimento</a>
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Plots</a>
                                    <a class="dropdown-item" href="{{ url('/dicas') }}">Outros</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dicas') }}">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/perfil') }}">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->

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

        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3>Sobre</h3>
                        <p class="mb-4">
                            <img src="{{ asset('template/images/logoTcc.png') }}" alt="Logo Plot Makers" class="img-fluid">
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
                                        <li><a href="{{ url('/about') }}">Sobre nós</a></li>
                                        <li><a href="{{ url('/dicas') }}">Dicas de Escrita</a></li>
                                        <li><a href="{{ url('/perfil') }}">Perfil</a></li>
                                        <li><a href="{{ url('/pagPrincip') }}">Página Principal</a></li>
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
                <div class="row <div class="col-md-12 text-center">
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

    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
</body>

</html>