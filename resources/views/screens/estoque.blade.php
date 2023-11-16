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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
