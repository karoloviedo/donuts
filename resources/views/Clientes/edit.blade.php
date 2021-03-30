@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   Editar Cliente
                </div>
                <div class="card-body">
                    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{$cliente->nombre}}">
                    </div>
                    <div class="form-group">
                        <label>Pedido</label>
                        <input type="text" class="form-control" name="pedido" value="{{$cliente->pedido}}">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$cliente->email}}">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('clientes.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection