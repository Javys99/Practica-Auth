<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style>
    /* Agrega estilos personalizados si es necesario */
    body {
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <!-- Contenido del div que se centrará -->
                <div class="card">
                    <div class="card-body">
                        <!-- Tu contenido aquí -->
                        <h1 class="text-center">Bienvenido:
                            @auth
                                {{ auth()->user()->name }}
                            @else
                                Invitado
                            @endauth
                        </h1>

                        <div>
                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-block">Cerrar sesión</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary btn-block">Iniciar sesión</a>
                                <a href="{{ route('register') }}" class="btn btn-primary btn-block">Registrarse</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>