<?php

namespace App\Http\Controllers;

use App\Models\Peca;

class EstoqueController extends Controller
{
    public function estoque()
    {
        $estoque = Peca::all();
        return view('screens.estoque', ['estoque' => $estoque]);
    }
}
