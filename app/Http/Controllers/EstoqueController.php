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
        $contribuidores = User::select('id', 'name', 'email', 'total_creditos')->get();
        return view('screens.controle', ['contribuidores' => $contribuidores]);
    }

    public function destroy($id)
    {
        $usuario = User::find($id);

        if (!$usuario) {
            // Lidar com o caso em que o usuário não foi encontrado
            return redirect()->route('/controle')->with('msg', 'Usuário não encontrado!!.');
        }

        // Excluir os registros na tabela "creditos" relacionados a este usuário
        Creditos::where('user_id', $id)->delete();

        // Excluir o usuário
        $usuario->delete();

        // Lidar com a exclusão bem-sucedida
        return redirect('/controle')->with('msg', 'Usuario deletado com sucesso!!!');
    }
}
