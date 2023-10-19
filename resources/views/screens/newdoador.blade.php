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

    <link rel="stylesheet" href="css/newdoador.css">
    <title>Nova Peça</title>
</head>
<body>
    <div class="min-h-screen">
        @livewire('navigation-menu')


        <div class="container">
            <form action="{{ route('doador.store') }}" method="POST">
                @csrf

                <div class="lineA">
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
                </div>

                <div class="btn">
                    <button type="submit" class="botao">Cadastrar Novo Doador</button>
                </div>
            </form>
        </div>

@livewireScripts
</body>
</html>