<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Plot Makers - Registro</title>
    
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
                            <h4>Novo no Plot makers?</h4>
                            <h6 class="font-weight-light">Preencha os dados abaixo para criar sua conta.</h6>
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Nome" required style="border-radius: 5px; border-color: #847f8b;">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" required style="border-radius: 5px; border-color: #847f8b;">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Senha" required style="border-radius: 5px; border-color: #847f8b;">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Senha" required style="border-radius: 5px; border-color: #847f8b;">
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">Criar Conta</button>
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
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('template/../../assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/../../assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/../../assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('template/../../assets/js/misc.js')}}"></script>
    <!-- endinject -->
</body>

</html>