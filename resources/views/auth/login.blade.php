<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <title>Login</title>
</head>
<body>
    <div class="container h-100">
       <div class="row align-items-center h-100">
            <div class="col-8 mx-auto">
                <div id="login">
                   <div class="row">
                       <div id="estampa" class="d-none d-xs-none d-lg-block col-lg-6"></div>
                       <div id="form-login" class="col-sm-12 col-md-12 col-lg-6">
                            {{-- @include('messages/flash_message') --}}
                           <h3 class="text-center">Iniciar sesión</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="inputMail">Correo</label>
                                    <input id="inputMail" type="email" class="form-control form-control-sm" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="ejemplo@ejemplo.com">
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword">Contraseña</label>
                                    <input id="password" type="password" class="form-control form-control-sm" name="password" required autocomplete="current-password" placeholder="contraseña">
                                </div>

                                <div id="olvidePass">
                                    <a href="#" class="btn btn-link text-success float-right">Olvidé mi contraseña</a>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Ingresar</button>
                                </div>
                            </form>
                            <div class="text-center">
                                <a href="#" class="btn btn-link text-success">Regresar al inicio</a>
                            </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap 4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

