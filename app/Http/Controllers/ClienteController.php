<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){

        $cliente = Cliente::OrderBy('id', 'DESC')->paginate();

        return view('clientes.index', compact('cliente'));

    }

    public function create(){

        $cliente = new Cliente;

        return view('clientes.create', compact('cliente'));

    }

    public function store(Request $request, Cliente  $cliente){

        $cliente = $request->all();

        Cliente::create($cliente);

       return redirect()->route('clientes.index')->with('info', 'Cliente Creado Exitosamente');

    }

    public function edit($id){

        $cliente = Cliente::FindOrFail($id);

        return view('clientes.edit', compact('cliente'));

    }

    public function update(Request $request, $id){

        $cliente = Cliente::FindOrFail($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->pedido = $request->input('pedido');
        $cliente->email = $request->input('email');
        $cliente->save();

        return redirect()->route('clientes.index')->with('info', 'Cliente Actualizado');

    }

    public function destroy($id){

        $cliente = Cliente::FindOrFail($id);

        $cliente->delete();

        return redirect()->route('clientes.index')->with('info', 'Cliente Eliminado Exitosamente');

    }

}
?>