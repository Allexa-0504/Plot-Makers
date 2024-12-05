<!doctype html>
<html lang="en">

<head>
    <title>Plot Makers - Editar Perfil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>

<body>
    <div class="wrap">
        <header role="banner">
            <!-- Seu código de header aqui -->
        </header>

        <section class="site-section">
            <div class="container">
                <h2 class="text-center">Editar Perfil</h2>
                <form action="{{ route('perfil.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome de Usuário</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
                    </div>

                    <div class="form-group">
                        <label for="profile_photo">Foto de Perfil</label>
                        <input type="file" class="form-control" id="profile_photo" name="profile_photo" accept="image/*">
                        <small>Deixe em branco se não quiser alterar a foto de perfil.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Atualizar Perfil</button>
                </form>
            </div>
        </section>

        <footer class="site-footer">
            <!-- Seu código de footer aqui -->
        </footer>
    </div>

    <script src="{{ asset('template/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
</body>

</html>