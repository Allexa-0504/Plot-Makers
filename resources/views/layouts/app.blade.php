<!doctype html>
<html lang="en">

<head>
    <title>@yield('title', 'Plot Makers')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('template/images/logoTcc (1).png') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <div class="wrap">
        <header role="banner">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-3 search-top">
                            <form action="{{ url('/pesquisar') }}" method="GET" class="search-top-form">
                                <span class="icon fa fa-search"></span>
                                <input type="text" name="query" id="s" placeholder="Pesquisar..." required>
                                <button type="submit" style="display: none;"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                        <h1 class="site-logo">
                            <a href="{{ url('/pagPrincip') }}">
                                <img src="{{ asset('template/images/headerTcc__1_-removebg-preview.png') }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/') }}">Página Principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dicas-escrita') }}">Dicas de escrita</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/about') }}">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/perfil') }}">Perfil</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="fab" ontouchstart="">
                <form action="{{ url('/edicao') }}">
                    <button class="main" style="width: 70px; height: 70px; border-radius: 50%;">
                        <img src="{{ asset('template/images/caneta-de-pena.png') }}" alt="" class="image-button">
                    </button>
                </form>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

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
                                        <li><a href="{{ url('/about') }}">Sobre a plataforma</a></li>
                                        <li><a href="{{ url('/dicas') }}">Dicas de Escrita</a></li>
                                        <li><a href="{{ url('/perfil') }}">Perfil</a></li>
                                        <li><a href="{{ url('/pagPrincip') }}">Página Principal</a></li>
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
    </div>

    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('template/js/popper.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>