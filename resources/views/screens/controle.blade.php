<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <link rel="stylesheet" href="css/controle.css">
    <link rel="stylesheet" href="css/form-grupo.css">
    <title>Controle Geral</title>
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

        <section class="saldo-d-container">
            <div class="overlay">

            </div>
            <div class="formulario">
                <form action="{{ route('doador.verSaldo') }}" method="POST">
                    @csrf

                    <div class="grupo-formulario">
                        <label for="email">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-envelope fa-xl"></i>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Email do contribuidor" required>
                            </div>
                        </label>
                    </div>

                    <div class="btn">
                        <button type="submit" class="botao">Verificar</button>
                    </div>
                </form>

            </div>
        </section>

        <section class="creditos-d-container">
            <div class="overlay">

            </div>
            <div class="formulario">
                <form action="{{ route('doador.aplicarCredito') }}" method="POST">
                    @csrf

                    <div class="grupo-formulario">
                        <label for="email">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-envelope fa-xl"></i>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Email do contribuidor" required>
                            </div>
                        </label>
                    </div>

                    <div class="grupo-formulario">
                        <label for="creditos">
                            <div class="campo-entrada">
                                <i class="fa-solid fa-coins fa-xl"></i>
                                <input type="number" name="creditos" class="form-control" placeholder="Partilhes"
                                    required>
                            </div>
                        </label>
                    </div>

                    <div class="btn">
                        <button type="submit" class="botao">Aplicar</button>
                    </div>

                </form>
            </div>

        </section>

        <section class="tabela">
            <table class="estoque-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Partilhes</th>
                        <th>Tipo de acesso</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contribuidores as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->total_creditos }}</td>
                            <td>
                                @if ($user->access_level == 1)
                                    Administrador
                                @elseif($user->access_level == 2)
                                    Contribuidor
                                @endif
                            </td>
                            <td>
                                <button id="edit">
                                    <i class="fa-solid fa-pen-to-square fa-lg" style="color: #ffffff;"></i>
                                <a href="/controle/edit/{{ $user->id }}">Editar</a>
                            </button>

                                <form action="/controle/{{ $user->id }}" method="post" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="delet">
                                        <i class="fa-solid fa-trash-can fa-lg" style="color: #ffffff;"></i>
                                        Excluir
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>




        @livewireScripts
        <script src="js/modal.js"></script>
</body>

</html>
