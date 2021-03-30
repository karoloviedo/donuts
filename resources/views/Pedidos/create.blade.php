@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Crear Pedido
                </div>
                <div class="card-body">
                    <form action="{{ route('pedidos.store') }}" method="PUT">
                    @csrf
                    <div class="form-group">
                        <label>Nombre Cliente</label>
                        <input type="text" class="form-control" name="nombre_cliente" required>
                    </div>
                    <div class="form-group">
                        <label>Atendio</label>
                        <input type="text" class="form-control" name="atendio" required>
                    </div>
                    <div class="form-group">
                        <label>Repartio</label>
                        <input type="text" class="form-control" name="repartio" required>
                    </div>
                    <div class="form-group">
                        <label>Detalle</label>
                        <input type="text" class="form-control" name="detalle_cliente" required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <a href="{{ route('pedidos.index') }}" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection