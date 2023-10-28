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

    <link rel="stylesheet" href="css/newitem.css">
    <link rel="stylesheet" href="css/form-grupo.css">
    <link rel="stylesheet" href="css/flashmensage.css">
    <title>Nova Peça</title>
</head>

<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')

        <x-flash-message/>

        {{-- <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg" id="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div> --}}

        <section class="container-form">
            <div class="overlay">
                <div id="logo">
                    <img src="img/logo.svg" alt="logo">
                </div>
                <img src="img/vetor.svg" alt="vetor">
            </div>


            <div class="formulario">
                <h1 id="titulo">Cadastre uma nova peça!</h1>
                <form action="{{ route('pecas.criarPeca') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grupo-formulario">
                        <label for="codigo">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-tag fa-xl"></i>
                                <input type="text" name="codigo" class="form-control" placeholder="Código" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="cor">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-palette fa-xl"></i>
                                <input type="text" name="cor" class="form-control" placeholder="Cor" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="tipo">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-shirt fa-lg"></i>
                                <input type="text" name="tipo" class="form-control" placeholder="Tipo" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="material">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-scissors fa-xl"></i>
                                <input type="text" name="material" class="form-control" placeholder="Material" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="email_doador">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-envelope fa-xl"></i>
                                <input type="email" name="email_doador" class="form-control" placeholder="Email do contribuidor" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="creditos">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-coins fa-xl"></i>
                                <input type="number" name="creditos" class="form-control" placeholder="Partilhes" required>
                            </div>
                        </label>
                    </div>

                    <div class="linha-botoes">
                        <div class="form-img">
                            <input type="file" id="file" name="image" required>
                            <button type="button" class="botao-file" onclick="acionarInput()">Imagem</button>
                        </div>
                        <div class="btn">
                            <button type="submit" class="botao">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <!-- Scripts -->
        @livewireScripts
        <script src="js/modal.js"></script>
        <script src="js/input.js"></script>
</body>
</html>