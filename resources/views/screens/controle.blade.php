@extends('layouts.master')

@section('title', 'Controle')

@section('content')
   

    <section class="creditos-d-container">
        <div class="overlay-quadrado">

        </div>
        <div class="formulario">
            <h1 id="titulo-controle">Aplicar Créditos!</h1>
            <form action="{{ route('doador.aplicarCredito') }}" method="POST">
                @csrf

                <div class="grupo-formulario">
                    <label for="email">
                        <div class="campo-entrada">
                            <i class="fa-solid fa-envelope fa-xl"></i>
                            <input type="email" name="email" class="form-control" placeholder="Email do contribuidor"
                                required>
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

                <div class="btn">
                    <button type="submit" class="botao">Aplicar</button>
                </div>

            </form>
        </div>

    </section>

    <section class="saldo-d-container">
        <div class="overlay-quadrado">

        </div>
        <div class="formulario">
            <h1 id="titulo-controle">Verificar Créditos!</h1>
            <form action="{{ route('doador.verSaldo') }}" method="POST">
                @csrf

                <div class="grupo-formulario">
                    <label for="email">
                        <div class="campo-entrada">
                            <i class="fa-solid fa-envelope fa-xl"></i>
                            <input type="email" name="email" class="form-control" placeholder="Email do contribuidor"
                                required>
                        </div>
                    </label>
                </div>

                <div class="btn">
                    <button type="submit" class="botao">Verificar</button>
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
@endsection
