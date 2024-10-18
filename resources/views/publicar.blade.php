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
                <form action="#" class="p-5 bg-light">
                    <div class="form-group">
                        <label for="titulo">Título *</label>
                        <input type="text" class="form-control" id="titulo">
                    </div>
                    <div class="form-group">
                        <label for="classificacao">Classificação *</label>
                        <input type="number" class="form-control" id="classificacao">
                    </div>
                    <div class="form-group">
                        <label for="genero">Gênero *</label>
                        <input type="text" class="form-control" id="genero">
                    </div>

                    <div class="form-group">
                        <label for="desc">Descrição *</label>
                        <textarea name="" id="desc" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-black">Tags</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Insira o nome da tag">
                                <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Adicionar tag</button>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Postar Texto" class="btn btn-primary" style="margin-top: 25px;">
                    </div>
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
            <script src="{{asset('template/js/todo.js')}}"></script>
            <script src="{{asset('template/js/todolist.js')}}"></script>

            <script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>