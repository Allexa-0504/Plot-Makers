<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Post 1</title>
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
                            <!-- <a href="#"><span class="fa fa-search"></span></a> -->
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
                        <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                        <h1 class="site-logo">
                            <a href="{{url('/pagPrincip')}}"><img src="{{asset('template/images/headerTcc__1_-removebg-preview.png')}}" alt=""></a>
                        </h1>
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

        <section class="site-section py-lg">
            <div class="container">

                <div class="row blog-entries element-animate">

                    <div class="col-md-12 col-lg-8 main-content">
                        <img src="{{asset('template/images/img_10.jpg')}}" alt="Image" class="img-fluid mb-5">
                        <div class="post-meta">
                            <span class="author mr-2"><img src="{{asset('template/images/pers')}}" alt="Colorlib" class="mr-2"> Colorlib</span>&bullet;
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h1 class="mb-4">Post Teste</h1>
                        <a class="category mb-5" href="#">Não-Ficção</a> <a class="category mb-5" href="#">Conto</a>

                        <div class="post-content-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet
                                rerum repellendus porro.</p>
                            <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique
                                sint eius cupiditate necessitatibus, magni nesciunt ex eos.</p>
                            <p>Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora
                                error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.</p>
                            <div class="row mb-5">
                                <div class="col-md-12 mb-4">
                                    <img src="{{asset('template/images/img_10.jpg')}}" alt="Image placeholder" class="img-fluid">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <img src="{{asset('template/images/img_10.jpg')}}" alt="Image placeholder" class="img-fluid">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <img src="{{asset('template/images/img_10.jpg')}}" alt="Image placeholder" class="img-fluid">
                                </div>
                            </div>
                            <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus,
                                animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>
                            <p>Temporibus quo dolore veritatis doloribus delectus dolores perspiciatis recusandae ducimus, nisi quod, incidunt ut quaerat, magnam cupiditate. Aut, laboriosam magnam, nobis dolore fugiat impedit necessitatibus nisi cupiditate,
                                quas repellat itaque molestias sit libero voluptas eveniet omnis illo ullam dolorem minima.</p>
                            <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla quidem, provident eius quos pariatur maxime sapiente
                                illo nostrum quibusdam aliquid fugiat! Earum quod fuga id officia.</p>
                            <p>Illo magnam at dolore ad enim fugiat ut maxime facilis autem, nulla cumque quis commodi eos nisi unde soluta, ipsa eius aspernatur sint atque! Nihil, eveniet illo ea, mollitia fuga accusamus dolor dolorem perspiciatis rerum
                                hic, consectetur error rem aspernatur!</p>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel
                                expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p>
                        </div>


                        <div class="pt-5">
                            <p>Categories: <a href="#">Food</a>, <a href="#">Travel</a> Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
                        </div>


                        <div class="pt-5">

                            <h3 class="mb-5">6 Comentários</h3>

                            <ul class="comment-list">

                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>

                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>

                                    <ul class="children">
                                        <li class="comment">
                                            <div class="vcard">
                                                <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                            </div>
                                            <div class="comment-body">
                                                <h3>Jean Doe</h3>
                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit
                                                    necessitatibus, nihil?</p>
                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                            </div>


                                            <ul class="children">
                                                <li class="comment">
                                                    <div class="vcard">
                                                        <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                                    </div>
                                                    <div class="comment-body">
                                                        <h3>Jean Doe</h3>
                                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                                                            impedit necessitatibus, nihil?</p>
                                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                                    </div>

                                                    <ul class="children">
                                                        <li class="comment">
                                                            <div class="vcard">
                                                                <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                                            </div>
                                                            <div class="comment-body">
                                                                <h3>Jean Doe</h3>
                                                                <div class="meta">January 9, 2018 at 2:21pm</div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas
                                                                    earum impedit necessitatibus, nihil?</p>
                                                                <p><a href="#" class="reply rounded">Reply</a></p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="comment">
                                    <div class="vcard">
                                        <img src="{{asset('template/images/OIP.jpg')}}" alt="Image placeholder">
                                    </div>
                                    <div class="comment-body">
                                        <h3>Jean Doe</h3>
                                        <div class="meta">January 9, 2018 at 2:21pm</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus,
                                            nihil?
                                        </p>
                                        <p><a href="#" class="reply rounded">Reply</a></p>
                                    </div>
                                </li>
                            </ul>
                            <!-- END comment-list -->

                            <div class="comment-form-wrap pt-5">
                                <h3 class="mb-5">Escrever Comentário</h3>
                                <form action="#" class="p-5 bg-light">

                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Enviar Comentário" class="btn btn-primary">
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <!-- END main-content -->

                    <div class="col-md-12 col-lg-4 sidebar">
                        <div class="sidebar-box search-form-wrap">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon fa fa-search"></span>
                                    <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                                </div>
                            </form>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <div class="bio text-center">
                                <img src="{{asset('template/images/OIP.jpg')}}" alt="Image Placeholder" class="img-fluid">
                                <div class="bio-body">
                                    <h2>Craig David</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.</p>
                                    <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                                    <p class="social">
                                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                                        <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- END sidebar-box -->
                        <div class="sidebar-box">
                            <h3 class="heading">Popular Posts</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('template/images/img_1.jpg')}}" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">Março 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('template/images/img_1.jpg')}}" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">Março 15, 2018 </span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img src="{{asset('template/images/img_1.jpg')}}" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">Março 15, 2018 </span>
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
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END sidebar -->

                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-3 ">Related Post</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_2.jpg'); ">
                            <div class="text">
                                <div class="post-meta">
                                    <span class="category">Lifestyle</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_3.jpg'); ">
                            <div class="text">
                                <div class="post-meta">
                                    <span class="category">Travel</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
                            <div class="text">
                                <div class="post-meta">
                                    <span class="category">Food</span>
                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>


        </section>
        <!-- END section -->

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
                                        <li><a href="{{url('/about')}}">Sobre nós</a></li>
                                        <li><a href="category.html">Gêneros</a></li>
                                        <li><a href="#">Dicas de Escrita</a></li>
                                        <li><a href="contact.html">Perfil</a></li>
                                        <li><a href="index.html">Página Principal</a></li>
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
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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