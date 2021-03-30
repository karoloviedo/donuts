<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class PedidoController extends Controller
{

    public function index(){

        $pedido = Pedido::OrderBy('id', 'DESC')->paginate();

        return view('pedidos.index', compact('pedido'));

    }

    public function create(){

        $pedido = new Pedido;

        return view('pedidos.create', compact('pedido'));

    }

    public function store(Request $request, Pedido  $pedido){

        $pedido = $request->all();

        Pedido::create($pedido);

       return redirect()->route('pedidos.index')->with('info', 'Pedido Creado Exitosamente');

    }

    
    public function destroy($id){

        $pedido = Pedido::FindOrFail($id);

        $pedido->delete();

        return redirect()->route('pedidos.index')->with('info', 'Pedido Eliminado Exitosamente');

    }
}

?>