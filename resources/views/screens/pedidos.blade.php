@extends('layouts.master')

@section('title', 'Pedidos')

@section('content')
<section class="tabela">
    @if (count($pedidos) > 0)
        <table class="estoque-table">
            <thead>
                <tr>
                    <th>Contribuidor</th>
                    <th>Saldo do Contribuidor</th>
                    <th>Codigo</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->usuario_email }}</td>
                        <td>{{ $pedido->total_creditos }} Partilhes</td>
                        <td>{{ $pedido->codigo }}</td>
                        <td>
                            <form action="/pedidos/{{ $pedido->id }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" id="finished">
                                    <i class="fa-solid fa-check fa-lg" style="color: #ffffff;"></i>
                                    Finalizado
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Nenhum pedido foi feito ainda.</p>
    @endif
</section>

@endsection
