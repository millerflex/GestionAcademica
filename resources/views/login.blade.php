<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Azul Noche</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom CSS -->
    <style>
        /* General */
        body {
            background: linear-gradient(to right, #0a0f3d, #1a237e);
            height: 100vh;
            font-family: 'Arial', sans-serif;
            color: #ffffff;
        }

        /* Card */
        .card {
            background-color: #1f2d4d; /* Azul oscuro */
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            padding: 30px;
            max-width: 400px;
            margin: auto;
            color: #e0e0e0;
        }

        /* Title */
        h3 {
            font-weight: bold;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
            color: #ffffff;
        }

        /* Inputs */
        .form-control {
            background-color: #2c3e50;
            border: 1px solid #34495e;
            padding: 10px;
            border-radius: 5px;
            color: #ffffff;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0px 0px 5px rgba(26, 115, 232, 0.7);
        }

        /* Button */
        .login_btn {
            background-color: #1a237e;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            transition: 0.3s ease;
            padding: 10px 20px;
        }

        .login_btn:hover {
            background-color: #3949ab;
        }

        /* Links */
        .link a {
            color: #90caf9;
            text-decoration: none;
        }

        .link a:hover {
            text-decoration: underline;
            color: #64b5f6;
        }

        /* Logo */
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            width: 100px;
        }

        /* Icons */
        .input-group-text {
            background-color: #2c3e50;
            color: #ffffff;
            border: 1px solid #34495e;
        }
    </style>
</head>

<body>
    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-md-6 offset-md-3">
                <div class="card">

                    <!-- Logo -->
                    <div class="logo">
                        <img src="\image\logoUnt.png" alt="Logo">
                    </div>

                    <!-- Título -->
                    <h3>INICIAR SESIÓN</h3>

                    <!-- Formulario -->
                   
                    <!-- Formulario -->
                    <div class="card-body">
                    <form action="{{ route('inicia-sesion') }}" method="POST">

                     @csrf

                            <!-- Email -->
                            <div class="input-group form-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electrónico" name="email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="input-group form-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Botón -->
                            <div class="form-group">
                                <button type="submit" class="btn float-right login_btn">Acceder</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+bjj02h9xAB0FfWl5FQ5byB8bZR77Ck9h8T7d2MgU2e7O7uH2" crossorigin="anonymous">
    </script>
</body>

</html>