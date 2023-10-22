<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/edit.css">
    <link rel="stylesheet" href="css/form-grupo.css">
    <title>Editar Usuario</title>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-image: url(/img/wallpaper.gif);
            background-size: cover;
            background-attachment: fixed;
        }

        .container-form {
            display: flex;
            margin: 80px auto;
            background-color: #ffffff;
            border-radius: 15px;
            width: 130vh;
            height: 76vh;
            overflow: hidden;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
        }

        .overlay {
            background-image: url(/img/overlay.jpg);
            background-size: cover;
            width: 40%;
            height: 100%;
        }

        #logo {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .formulario {
            margin: 0 auto;
            width: 50%;
            height: 100%;
            text-align: center;
            display: block;
            padding-top: 30px;
        }

        #titulo {
            margin-bottom: 10px;
            color: #527C49;
            ;
            font-size: 3.5vh;
            font-weight: 580;
        }

        .grupo-formulario {
            background-color: transparent;
            padding: 10px;
        }

        .grupo-formulario i {
            padding: 0 5px;
            color: #527C49;
        }


        .form-control {
            width: 100%;
            border: none;
            border-radius: 25px;
            border: 2px solid #527C49;
        }

        .form-control::placeholder {
            color: #527C49;
        }

        .form-control:focus {
            background-color: white !important;
            border: 2px solid #527C49;
        }

        .btn {
            height: 5vh;
            width: 25vh;
            color: white;
            background-color: #527C49;
            border-radius: 20px;
            cursor: pointer;
            margin-top: 50px;
        }

        .access_level {
            height: 5vh;
            width: 25vh;
            color: #527C49;
            border: 2px solid #527C49;
            border-radius: 20px;

        }
    </style>
</head>
<body>
    <section class="container-form">
        <div class="overlay">
        </div>

        <div class="formulario">
            <form method="POST" action="{{ route('controle.update', ['id' => $user->id]) }}">
                @csrf
                @method('PUT')

                <div class="grupo-formulario">
                    <label for="name">
                        <div class="campo-entrada">
                            Nome
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $user->name }}">
                        </div>
                    </label>
                </div>
                <div class="grupo-formulario">
                    <label for="email">
                        <div class="campo-entrada">
                            Email
                            <input type="email" name="email" id="email" class="form-control"
                                value="{{ $user->email }}">
                        </div>
                    </label>
                </div>
                <div class="grupo-formulario">
                    <label for="creditos">
                        <div class="campo-entrada">
                            Partilhes
                            <input type="number" name="creditos" id="creditos" class="form-control"
                                value="{{ $user->total_creditos }}">
                        </div>
                    </label>
                </div>
                <select name="access_level" class="access_level">
                    <option value="1" @if ($user->access_level == 1) selected @endif>Administrador</option>
                    <option value="2" @if ($user->access_level == 2) selected @endif>Contribuidor</option>
                </select>


                <button type="submit" class="btn">Atualizar Usuário</button>
            </form>

</body>
</html>
