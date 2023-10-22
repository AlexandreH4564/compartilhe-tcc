<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DoadorController extends Controller
{

    public function verSaldo(Request $request)
    {
        $doador = User::where('email', mb_strtoupper($request->email, 'UTF-8'))->get();
        return redirect('/controle')->with('msg', $doador[0]->total_creditos);
    }

    
    public function showSaldo()
    {
        $user = auth()->user();
        $creditos = $user->total_creditos;

        return view('dashboard', ['creditos' => $creditos]);
    }

    public function aplicarCredito(Request $request)
    {
        $request->validate([
            'email' => 'required|string'
        ]);

        $doador = User::where('email', mb_strtoupper($request->email, 'UTF-8'))->get();

        if(!$doador){
            return '<h1>Doador não encontrado!</h1>';
        }

        $doador[0]->fill([
            'total_creditos' => ($doador[0]->total_creditos + $request->creditos)
        ]);
        $doador[0]->save();

        return redirect('/controle')->with('msg', 'Créditos aplicados com sucesso!!!');
    }

    // public function criarDoador(Request $request)
    // {
    //     $request->validate([
    //         'nome' => 'required|string',
    //         'email' => 'required|string'
    //     ]);

    //     $obj_doador = new Doador();
    //     $obj_doador->nome = mb_strtoupper($request->nome, 'UTF-8');
    //     $obj_doador->email = mb_strtoupper($request->email, 'UTF-8');
    //     $obj_doador->save();

    //     return '<h1>Doador cadastrado com sucesso!</h1>';

    //     // return redirect()->route('doador.create')->with('success', 'Peça cadastrada com sucesso!');
    // }
}
