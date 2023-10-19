<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/controle.css">
    <title>Controle Geral</title>
</head>

<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')

        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg" id="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>


        <div class="cadastro-d-container">
            <h1>Cadastrar Novo Doador</h1>
            <hr>
            <div class="form-doador">
                <form action="{{ route('doador.criarDoador') }}" method="POST">
                    @csrf


                    {{-- Nome Box --}}
                    <div class="form-group">
                        <label for="nome">
                            Nome
                            <div class="input-field">
                                <input type="text" name="nome" class="form-control" required>
                            </div>
                        </label>
                    </div>

                    {{-- Email Box --}}
                    <div class="form-group">
                        <label for="email">
                            Email
                            <div class="input-field">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </label>
                    </div>
                    <div class="btn">
                        <button type="submit" class="botao">Cadastrar</button>
                    </div>


                </form>
            </div>
        </div>

        <div class="saldo-d-container">
            <h1>Verificar Saldo</h1>
            <hr>
            <div class="form-doador">
                <form action="{{ route('doador.verSaldo') }}" method="POST">
                    @csrf

                    {{-- Email Box --}}
                    <div class="form-group">
                        <label for="email">
                            Email
                            <div class="input-field">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </label>
                    </div>
                    <div class="btn">
                        <button type="submit" class="botao">Verificar</button>
                    </div>
                </form>

            </div>
        </div>

        <div class="creditos-d-container">
            <h1>Aplicar Créditos</h1>
            <hr>
            <div class="form-doador">
                <form action="{{ route('doador.aplicarCredito') }}" method="POST">
                    @csrf

                    {{-- Email Box --}}
                    <div class="form-group">
                        <label for="email">
                            Email
                            <div class="input-field">
                                <input type="text" name="email" class="form-control" required>
                            </div>
                        </label>
                    </div>
                    {{-- Créditos --}}

                    <div class="form-group">
                        <label for="creditos">
                            Partilhes
                            <div class="input-field">
                                <input type="number" name="creditos" class="form-control" required>
                            </div>
                        </label>
                    </div>
                    <div class="btn">
                        <button type="submit" class="botao">Aplicar</button>
                    </div>

                </form>
            </div>

        </div>




        @livewireScripts
        <script src="js/modal.js"></script>
</body>
</html>
