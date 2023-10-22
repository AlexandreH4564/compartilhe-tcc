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

        if (!$doador) {
            return '<h1>Doador não encontrado!</h1>';
        }

        $doador[0]->fill([
            'total_creditos' => ($doador[0]->total_creditos + $request->creditos)
        ]);
        $doador[0]->save();

        return redirect('/controle')->with('msg', 'Créditos aplicados com sucesso!!!');
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('screens.edit', ['user' => $user]);
    }



    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);
    
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->total_creditos = $request->input('creditos');
        $user->access_level = $request->input('access_level');

        $user->save();
    
        return redirect('/controle')->with('msg', 'Usuário atualizado com sucesso');
    }
}
