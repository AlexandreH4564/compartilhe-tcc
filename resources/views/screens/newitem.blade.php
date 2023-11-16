@extends('layouts.master')

@section('title', 'Nova Peça')

@section('content')

    <section class="container-form">
        <div class="overlay">
            <div id="logo">
                <img src="img/logo.svg" alt="logo">
            </div>
            <img src="img/vetor.svg" alt="vetor">
        </div>

        <div class="formulario">
            {{-- <h1 id="titulo">Cadastre uma nova peça!</h1> --}}
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
                            <input type="email" name="email_doador" class="form-control"
                                placeholder="Email do contribuidor" required>
                        </div>
                    </label>
                </div>
                <div class="grupo-formulario">
                    <label for="descricao">
                        <div class="campo-entrada">
                            <i class="fa-solid fa-pencil fa-2xl"></i>
                            <input type="text" name="descricao" class="form-control" placeholder="Descrição" required>
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
@endsection
