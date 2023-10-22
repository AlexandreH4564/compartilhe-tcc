<?php

namespace App\Http\Controllers;

use App\Models\Peca;
use App\Models\User;
use App\Models\Creditos;

class EstoqueController extends Controller
{
    public function estoque()
    {
        $estoque = Peca::all();
        return view('screens.estoque', ['estoque' => $estoque]);
    }

    public function usuarios()
    {
        $contribuidores = User::select('id', 'name', 'email', 'total_creditos', 'access_level')->get();
        return view('screens.controle', ['contribuidores' => $contribuidores]);
    }

    public function destroy($id)
    {
        $usuario = User::find($id);

        Creditos::where('user_id', $id)->delete();
        
        $usuario->delete();

        return redirect('/controle')->with('msg', 'Usuario deletado com sucesso!!!');
    }


}
