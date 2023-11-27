@extends('layouts.master')

@section('title', 'Acervo')

@section('content')
    <section class="tabela">
        <table class="estoque-table">
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Codigo</th>
                    <th>Tipo</th>
                    <th>Cor</th>
                    <th>Material</th>
                    <th>Descrição</th>
                    <th>Solicitar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estoque as $peca)
                    <tr>
                        <td>
                            <img src="{{ asset('img/pecas/' . $peca->image) }}" alt="{{ $peca->image }}" width="100"
                                height="100"class="foto">
                        </td>
                        <td>{{ $peca->codigo }}</td>
                        <td>{{ $peca->tipo }}</td>
                        <td>{{ $peca->cor }}</td>
                        <td>{{ $peca->material }}</td>
                        <td>{{ $peca->descricao }}</td>
                        <td>

                            <form method="POST" action="{{ route('pedido.solicitar') }}">
                                @csrf
                                <input type="hidden" name="codigo" value="{{ $peca->codigo }}">
                                <input type="hidden" name="usuario_email" value="{{ auth()->user()->email }}">
                                <input type="hidden" name="total_creditos" value="{{ auth()->user()->total_creditos }}">
                                <button type="submit" id="request"> 
                                    <i class="fa-solid fa-bag-shopping fa-lg" style="color: #ffffff;"></i>
                                    Solicitar Peça
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
