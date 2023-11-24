@extends('layouts.master')

@section('title', 'Bem-Vindo!')

@section('content')
        <header>
            <h2 class="ola">
                {{ __('Olá, :name!', ['name' => Auth::user()->name]) }}
            </h2>

            <div class="saldo">
                <p>{{ $creditos }} Partilhes.</p>
            </div>
        </header>

        <div>






































            tese
        </div>
@endsection



