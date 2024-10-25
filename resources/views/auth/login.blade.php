<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plot Makers - Login</title>

    <link rel="stylesheet" href="{{asset('template/../../assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/../../assets/vendors/css/vendor.bundle.base.css')}}">

    <link rel="stylesheet" href="{{asset('template/css/stylePurple.css')}}">

    <link rel="shortcut icon" href="{{asset('template/images/logoTcc (1).png')}}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{asset('template/images/logoTcc (1).png')}}" style="width: 70px; height: 70px; border-radius: 50px;">
                            </div>
                            <h4>Olá! Bem-vindo ao Plot Makers!</h4>
                            <h6 class="font-weight-light">Faça login para continuar</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email" style="border-radius: 5px; border-color: #847f8b; required">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Senha" style="border-radius: 5px; border-color: #847f8b; required">
                                </div>
                                <div class="mt-3">
                                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="{{url('/pagPrincip')}}">Login</a>
                                </div>

                                <div class="text-center mt-4 font-weight-light"> Não possui conta? <a href="{{ url('/register') }}" class="text-primary">Crie uma agora!</a>
                                </div>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
   
    <script src="{{asset('template/../../assets/vendors/js/vendor.bundle.base.js')}}"></script>
    
    <script src="{{asset('template/../../assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/../../assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('template/../../assets/js/misc.js')}}"></script>
    
</body>

</html>