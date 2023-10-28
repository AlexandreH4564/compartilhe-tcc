@extends('layouts.master')

@section('title', 'Retirar Peça')

@section('content')

    <section class="container-form">
        <div class="form-retirar">
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
    

@endsection
