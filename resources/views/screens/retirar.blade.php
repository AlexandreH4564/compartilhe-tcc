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

    <link rel="stylesheet" href="css/retirar.css">
    <link rel="stylesheet" href="css/form-grupo.css">
    <link rel="stylesheet" href="css/flashmensage.css">
    <title>Retirar Peça</title>
</head>

<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')

        <div class="container-fluid">
            <div class="row">
                @if (session('erro'))
                    <p class="erro" id="msg">{{ session('erro') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg" id="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>

        <section class="container-form">

            <div class="formulario">
                <h1 id="titulo">Retire uma peça!</h1>
                <form action="{{ route('pecas.retirarPeca') }}" method="POST">
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
                        <label for="email retirar">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-envelope fa-xl"></i>
                                <input type="email" name="email_retirar" class="form-control"
                                    placeholder="Email do contribuidor" required>
                            </div>
                        </label>
                    </div>
                    <div class="grupo-formulario">
                        <label for="valor">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-coins fa-xl"></i>
                                <input type="number" name="valor_retirar" class="form-control" placeholder="Partilhes"
                                    required>
                            </div>
                        </label>
                    </div>
                    <div class="btn">
                        <button type="submit" class="botao">Retirar Peça</button>
                    </div>
                </form>
            </div>

            <div class="overlay">
                <div id="logo">
                    <img src="img/logo.svg" alt="logo">
                </div>
                <img src="img/vetor2.svg" alt="vetor">
            </div>
        </section>

        <!-- Scripts -->
        @livewireScripts
        <script src="js/modal.js"></script>
</body>
</html>