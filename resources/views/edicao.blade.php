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

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('template/css/style.css')}}">
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            }, {
                value: 'Email',
                title: 'Email'
            }, ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/d4vqpyrvlfvi7twx1sort0x4jt8otg57nab1qg24c7yzotsg/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

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

            <form action="{{ url('/publicar') }}" method="GET">
                <textarea id="default-editor" name="conteudo">
                    <p placeholder="Escreva aqui..."><span style="text-decoration: underline;"></span></p>
                </textarea>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="button-send">
                    <button class="btn-outline-primary" style="border-radius: 8px; margin-right: 10px;" type="button" onclick="window.location='{{ url('/pagPrincip') }}'">Voltar</button>
                    <button class="btn-outline-primary" style="border-radius: 8px;" type="submit">Continuar</button>
                </div>
            </form>

            <!--<form action="{{url('/publicar')}}">
                    <button class="btn-outline-primary" style="border-radius: 8px;">Continuar</button> <br>
                </form>
                <p>&nbsp;</p>-->
        </div>


            <!-- loader -->
            <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#6f42c1"/></svg></div>

            <script>
                document.querySelector('form').addEventListener('submit', function() {
                    document.getElementById('conteudo').value = tinymce.get('default-editor').getContent();
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