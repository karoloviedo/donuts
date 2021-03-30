@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Pedidos
                    <a href="{{ route('pedidos.create') }}" class="btn btn-primary float-right">Nuevo Pedido</a>
                </div>          
                <div class="card-body">
                @if(session('info'))
                <div class="alert alert-success">
                {{ session('info') }}
                </div>
                @endif
                <table class="table table-hover table-sm">
                    <thead>
                     
                        <th>Nombre Cliente </th>
                        <th>Atendio</th>
                        <th>Repartio</th>
                        <th>Detalle</th>
                        
                        <th colspan="2">Acciones</th>
                    </thead> 
                    <tbody>
                        @foreach( $pedido as $ped)
                        <tr>
                     
                            <td>{{$ped->nombre_cliente}}</td>
                            <td>{{$ped->atendio}}</td>
                            <td>{{$ped->repartio}}</td>
                            <td>{{$ped->detalle_cliente}}</td>
                    
                            <td>
                            <a href="javascript: document.getElementById('delete-{{ $ped->id }}').submit()" class="btn btn-danger">Eliminar</a>
                            <form id="delete-{{ $ped->id }}" action="{{ route('pedidos.destroy', $ped->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            </form>
                            </td>
                        </tr> 
                        @endforeach   
                    </tbody>         
                </table>
                <div class="card-footer">
                        <a href="javascript:document.getElementById('logout').submit()" class="btn btn-danger float-right">Cerrar Sesión</a>
                        <form action="{{ route('logout') }}" id="logout" style="display:none" method="POST"></form>
                        @csrf
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection