@extends('layouts.app')

@section('title', 'Plot Makers - Página Principal')

@section('content')

        <!-- END header -->


        <section class="site-section pt-5">
            <div class="container">

                <div class="row blog-entries">
                    <div class="col-md-12 col-lg-8 main-content">

                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="mb-4">Sobre a plataforma</h2>
                                <p class="mb-5"><img src="{{asset('template/images/logoTcc.png')}}" alt="Logo Plataforma" class="img-fluid"></p>
                                <!--(Aqui futuramente virão o tutorial, regras e normas da plataforma. 
                                    Só não coloquei ainda pois ainda não defini como será exatamente o texto nessa parte. 
                                    Abaixo há um pequeno exemplo de como será)-->
                                <p><b>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit ipsa eligendi voluptatum eaque eius accusamus iusto. Esse beatae error dignissimos numquam. Similique at consequuntur molestias.Atque aspernatur praesentium odit deleniti?</b></p>
                                <p class="mb-5"><img src="{{asset('template/images/Captura de tela de 2024-04-17 19-22-38.png')}}" alt="Logo Plataforma" class="img-fluid"></p>
                                <p>
                                    <p>Lorem ipsum dolor sit amet. Et velit nobis nam earum illo et aliquam eligendi 33 fuga consequuntur. Qui aspernatur sunt id dolores sunt est soluta ipsa et sint quia a blanditiis culpa et fugit blanditiis ab internos
                                        officiis. Sed praesentium ducimus eos odit nemo sed maiores omnis. Et quos libero nam provident ipsam et incidunt natus rem corporis earum cum obcaecati cumque sed molestiae facere non odit corrupti. </p>
                                    <p>Et magni libero vel iusto suscipit et saepe nihil est voluptatem eveniet ea corrupti quaerat est magni pariatur in ipsam nihil. Qui velit nihil quo dolor tenetur non aspernatur quia qui asperiores dolorem ut consequatur
                                        possimus sit accusamus voluptatibus sed alias sint. </p>
                                    <p>Hic ducimus molestiae et necessitatibus sunt eum illo officia ut incidunt magni. Id suscipit ipsum et reiciendis obcaecati non eaque saepe quo rerum voluptatem est voluptatem voluptates. Eum officiis velit eum culpa
                                        harum non tenetur deleniti et dicta quisquam sit numquam internos non distinctio voluptate. </p>
                                    <p class="mb-5"><img src="{{asset('template/images/Captura de tela de 2024-04-17 19-24-28.png')}}" alt="Logo Plataforma" class="img-fluid"></p>
                                    <p>
                                        <p>Lorem ipsum dolor sit amet. Ea delectus praesentium et officia velit est doloribus explicabo ut voluptatibus unde et omnis fuga cum omnis fuga. Est explicabo pariatur in quasi galisum et nostrum voluptatibus! </p>
                                        <p>Et incidunt optio eum facere sint est saepe possimus rem repellendus voluptatem. Est aspernatur dolore ea rerum autem ex rerum ullam ea unde iste sit nostrum pariatur vel iste labore ut explicabo facilis? 33 obcaecati
                                            amet et numquam quos sit consequatur officiis eum dolores tenetur eos quasi saepe eos nesciunt modi. </p>
                                        <p>Ab dolorum nihil aut vitae autem sit molestiae ullam qui distinctio molestiae! Ut rerum rerum 33 odio tempora ea incidunt ullam et iure voluptatem in consequuntur odio in voluptates eius. </p>
                                        <p>Quo minus quaerat et illum voluptate hic repellat maxime est enim sint qui maxime provident a enim adipisci eos velit galisum. Et omnis quisquam sit cupiditate fugit eos autem necessitatibus et iusto minima aut
                                            expedita error! </p>
                                    </p>
                                    <p class="mb-5"><img src="{{asset('template/images/Captura de tela de 2024-04-17 19-33-37.png')}}" alt="Logo Plataforma" class="img-fluid"></p>
                                    <p>
                                        <p>Lorem ipsum dolor sit amet. Nam quia quas aut voluptate odit id sequi dolores non recusandae aspernatur rem omnis doloribus. Aut beatae dolores non voluptatem autem aut quia nobis est dolore dolore. Vel ullam porro
                                            est cumque nostrum At culpa doloremque eos quia dolor quo cupiditate amet quo dolorum unde non autem adipisci. </p>
                                        <p class="mb-5"><img src="{{asset('template/images/2576686.png')}}" alt="Logo Plataforma" class="img-fluid" style="height: 50%; width: 50%;"></p>
                                        <ul>
                                            <li>Ut quisquam laborum quo rerum dolor. </li>
                                            <li>Ut tenetur sint est saepe officia est Quis aliquam. </li>
                                            <li>Sed exercitationem galisum et recusandae aspernatur sed accusantium ipsa ut voluptate eligendi. </li>
                                            <li>A cumque voluptas sit veniam sunt. </li>
                                            <li>Ut impedit magni qui recusandae galisum aut illo officia. </li>
                                            <li>Ut sequi neque qui quaerat delectus nam dolorum officiis. </li>
                                        </ul>
                                    </p>

                                </p>
                            </div>
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col-md-12 mb-5">
                                <h2>My Latest Posts</h2>
                            </div>

                            <div class="col-md-12">

                                <div class="post-entry-horzontal">
                                    <a href="blog-single.html">
                                        <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                                        <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                        <span class="mr-2">Março 15, 2018 </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                </div>
                                <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
                                </span>
                                </a>
                            </div>
                            <!-- FIM do post -->

                            <div class="post-entry-horzontal">
                                <a href="blog-single.html">
                                    <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                    <span class="mr-2">Março 15, 2018 </span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                            </div>
                            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
                            </span>
                            </a>
                        </div>
                        <!-- END post -->

                        <div class="post-entry-horzontal">
                            <a href="blog-single.html">
                                <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                                <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                                <span class="mr-2">Março 15, 2018 </span> &bullet;
                                <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                        </div>
                        <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
                        </span>
                        </a>
                    </div>
                    <!-- END post -->

                    <div class="post-entry-horzontal">
                        <a href="blog-single.html">
                            <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                            <span class="mr-2">Março 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
                    </span>
                    </a>
                </div>
                <!-- END post -->

                <div class="post-entry-horzontal">
                    <a href="blog-single.html">
                        <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                        <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">Março 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
                </span>
                </a>
            </div>
            <!-- END post -->

            <div class="post-entry-horzontal">
                <a href="blog-single.html">
                    <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">Março 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
            </div>
            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
            </span>
            </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">Março 15, 2018 </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">Março 15, 2018 </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    <div class="post-entry-horzontal">
        <a href="blog-single.html">
            <div class="image" style="background-image: url({{asset('template/images/img_10.jpg')}});"></div>
            <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="{{asset('template/images/person_1.jpg')}}" alt="Colorlib"> Colorlib</span>&bullet;
            <span class="mr-2">Março 15, 2018 </span> &bullet;
            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
    </div>
    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</h2>
    </span>
    </a>
    </div>
    <!-- END post -->

    </div>
    </div>

    <div class="row">
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
                    <h2>Meagan Smith</h2>
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
                            <img src="{{asset('template/images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
                            <div class="text">
                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                <div class="post-meta">
                                    <span class="mr-2">Março 15, 2018 </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{asset('template/images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
                            <div class="text">
                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                                <div class="post-meta">
                                    <span class="mr-2">Março 15, 2018 </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="{{asset('template/images/img_2.jpg')}}" alt="Image placeholder" class="mr-4">
                            <div class="text">
                                <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
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

@endsection