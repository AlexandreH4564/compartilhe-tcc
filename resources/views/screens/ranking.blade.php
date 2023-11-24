@extends('layouts.master')

@section('title', 'Ranking')

@section('content')
    <section class="tabela">
        <table class="estoque-table">
            <thead>
                <tr>
                    <th>Posição</th>
                    <th>Nome</th>
                    <th>Total de ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $user)
                    <tr>
                        <td>
                            @if ($key == 0)
                                O Maioral
                            @elseif ($key == 1)
                                2º lugar
                            @elseif ($key == 2)
                                3º lugar
                            @else
                                {{ $key + 1 }}º lugar
                            @endif
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->credits }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
