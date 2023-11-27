<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function solicitar(Request $request)
    {
        $pedido = new Pedido([
            'codigo' => $request->input('codigo'),
            'usuario_email' => $request->input('usuario_email'),
            'total_creditos' => $request->input('total_creditos'),
        ]);

        $pedido->save();

        return redirect()->route('estoque')->with('msg', 'Peça solicitada com sucesso!!!');
    }

    public function pedidos()
    {
        $pedidos = Pedido::all();
        return view('screens.pedidos', ['pedidos' => $pedidos]);
    }


    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido->delete();

        return redirect('pedidos')->with('msg', 'Pedido finalizado com sucesso!!!');
    }



}
