<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Type 1</title>
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
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu">
                            <span class="burger-lines"></span></a>

                        <a href="{{url('/pagPrincip')}}"><img src="{{asset('template/images/headerTcc__1_-removebg-preview.png')}}" alt=""></a>

                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-md  navbar-light bg-light">
                <div class="container">


                    <div class="collapse navbar-collapse" id="navbarMenu">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{url('/pagPrincip')}}">Página Principal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="generos.html">Gêneros</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{url('/dicas')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dicas de escrita</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Personagens</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Capítulos</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Estrutura</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Desenvolvimento</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Plots</a>
                                    <a class="dropdown-item" href="{{url('/dicas')}}">Outros</a>
                                </div>

                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="about.html">Sobre</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Perfil</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
        </header>
        <!-- END header -->


        <section class="site-section pt-5">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h2 class="mb-4">Dicas sobre: Personagens</h2>
                        <!--Aqui eu coloquei qualquer um, é só para ter uma ideia-->
                    </div>
                </div>
                <div class="row blog-entries">
                    <div class="col-md-12 col-lg-8 main-content">
                        <div class="row mb-5 mt-5">

                            <div class="col-md-12">

                                <div class="post-entry-horzontal">
                                    <a href="blog-single.html">
                                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url('{{asset('template/images/img_10.jpg')}}');"></div>
                                        <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib">Colorlib</span>&bullet;
                                        <span class="mr-2">15 de Março,2020</span> &bullet;
                                        <span class="mr-2">Plots</span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                </span>
                                </a>
                            </div>
                            <!-- END post -->

                            <div class="post-entry-horzontal">
                                <a href="blog-single.html">
                                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                    <span class="mr-2">15 de Março, 2020 </span> &bullet;
                                    <span class="mr-2">Plots</span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                            </span>
                            </a>
                        </div>
                        <!-- END post -->

                        <div class="post-entry-horzontal">
                            <a href="blog-single.html">
                                <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                                <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                <span class="mr-2">15 de Março, 2020 </span> &bullet;
                                <span class="mr-2">Construção</span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                        </span>
                        </a>
                    </div>
                    <!-- END post -->

                    <div class="post-entry-horzontal">
                        <a href="blog-single.html">
                            <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                            <span class="mr-2">15 de Março, 2020 </span> &bullet;
                            <span class="mr-2">Desenvolvimento</span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                    </span>
                    </a>
                </div>
                <!-- END post -->

                <div class="post-entry-horzontal">
                    <a href="blog-single.html">
                        <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">15 de Março, 2020 </span> &bullet;
                        <span class="mr-2">Encerramento</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                </span>
                </a>
            </div>
            <!-- END post -->

            <div class="post-entry-horzontal">
                <a href="blog-single.html">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">15 de Março, 2020 </span> &bullet;
                    <span class="mr-2">Plot</span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
            </span>
            </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">15 de Março, 2020 </span> &bullet;
            <span class="mr-2">Introdução</span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">15 de Março, 2020 </span> &bullet;
            <span class="mr-2">Food</span> &bullet;
            <span class="mr-2">Food</span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">15 de Março, 2020 </span> &bullet;
            <span class="mr-2">Food</span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
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

    <!-- END main-content -->


    <!-- END sidebar-box -->

    <!-- END sidebar-box -->
    <div class="sidebar-box">
        <h3 class="heading">Postagens Populares</h3>
        <div class="post-entry-sidebar">
            <ul>
                <li>
                    <a href="">
                        <img src="{{asset('template/images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <div class="post-meta">
                                <span class="mr-2">15 de Março, 2020 </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('template/images/img_4.jpg')}}" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <div class="post-meta">
                                <span class="mr-2">15 de Março, 2020 </span>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="{{asset('template/images/img_12.jpg')}}" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <div class="post-meta">
                                <span class="mr-2">15 de Março, 2020 </span>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Gêneros Literários</h3>
        <ul class="categories">
            <li><a href="#">Poema <span>(12)</span></a></li>
            <li><a href="#">Conto <span>(22)</span></a></li>
            <li><a href="#">Crônica <span>(37)</span></a></li>
            <li><a href="#">Redação ENEM <span>(42)</span></a></li>
            <li><a href="#">História Ficcional <span>(104)</span></a></li>
            <li><a href="#">História Curta <span>(42)</span></a></li>
            <li><a href="#">Haicai <span>(14)</span></a></li>
        </ul>
    </div>
    <!-- END sidebar-box -->

    <div class="sidebar-box">
        <h3 class="heading">Tags</h3>
        <ul class="tags">
            <li><a href="#">Romance</a></li>
            <li><a href="#">Aventura</a></li>
            <li><a href="#">Ficção</a></li>
            <li><a href="#">Não-Ficção</a></li>
            <li><a href="#">Fantasia</a></li>
            <li><a href="#">Sci-fi</a></li>
            <li>
                <a href="#">Terror</a>
            </li>
            <li><a href="#">Suspense</a></li>
            <li><a href="#">Fanfic</a></li>
            <li><a href="#">Novel</a></li>
            <li><a href="#">Fábula</a></li>
            <li><a href="#">Lenda</a></li>
        </ul>
    </div>
    </div>
    <!-- END sidebar -->

    </div>
    </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>Sobre</h3>
                    <p class="mb-4">
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
                                    <li><a href="about.html">Sobre nós</a></li>
                                    <li><a href="category.html">Gêneros</a></li>
                                    <li><a href="{{url('/dicas')}}">Dicas de Escrita</a></li>
                                    <li><a href="contact.html">Perfil</a></li>
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