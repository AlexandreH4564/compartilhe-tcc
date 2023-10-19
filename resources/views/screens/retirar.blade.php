<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/retirar.css">
    <title>Retirar Peça</title>
</head>
<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')


        <div class="container">
            <form action="{{ route('pecas.retirarPeca') }}" method="POST">
                @csrf

                <div class="lineA">
                    {{-- Codigo Box --}}
                    <div class="form-group">
                        <label for="codigo">
                            Codigo
                            <div class="input-field">
                                <input type="text" name="codigo" class="form-control" required>
                            </div>
                        </label>
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <label for="email retirar">
                            Email do comprador
                            <div class="input-field">
                                <input type="text" name="email_retirar" class="form-control" required>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="lineB">
                    {{-- Valor --}}
                    <div class="form-group">
                        <label for="Valor">
                            Valor em Partilhes
                            <div class="input-field">
                                <input type="number" name="valor_retirar" class="form-control" required>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="btn">
                    <button type="submit" class="botao">Cadastrar Nova Peça</button>
                </div>
            </form>
        </div>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg" id="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
        </div>

@livewireScripts
<script src="js/modal.js"></script>
</body>
</html>