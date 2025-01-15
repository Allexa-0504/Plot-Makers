<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Todas as Histórias</title>
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
                <div class="container" style="height: 20px;">
                    <div class="row">
                    </div>
                </div>
            </div>

            <div class="container logo-wrap">
                <div class="row pt-5">
                    <div class="col-12 text-center">
                        <h1 class="site-logo">
                                <img src="{{ asset('template/images/headerTcc__1_-removebg-preview.png') }}" alt="" class="img-fluid" style="max-width: 100%; height: auto;">
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="site-section pt-5">
                <div class="container">
                    <h2 class="mb-4">Todas as Histórias</h2>
                    <div class="row blog-entries">
                        <div class="col-md-12 col-lg-8 main-content">
                            <div class="row mb-5 mt-5">
                                @if($historias->isEmpty())
                                    <div class="col-md-12">
                                        <p>Nenhuma história encontrada.</p>
                                    </div>
                                @else
                                    @foreach($historias as $historia)
                                        <div class="col-12 mb-4">
                                            <div class="post-entry-horzontal">
                                                <a href="{{ url('/historia', $historia->id) }}">
                                                    <div class="image element-animate" data-animate -effect="fadeIn" style="background-image: url('{{ asset('storage/' . $historia->capa) }}');"></div>
                                                    <span class="text">
                                                        <div class="post-meta">
                                                            <span class="author mr-2">
                                                                <img src="{{ asset('storage/' . $historia->usuario->profile_photo_path) }}" alt="Autor" class="img-fluid" style="width: 30px; height: 30px; border-radius: 50%;">
                                                                {{ $historia->usuario->name }}
                                                            </span>&bullet;
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
        </main>
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