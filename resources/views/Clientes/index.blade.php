@extends('layouts.main')
@section('contenido')
<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Clientes
                    <a href="{{ route('clientes.create') }}" class="btn btn-primary float-right">Nuevo Cliente</a>
                </div>          
                <div class="card-body">
                @if(session('info'))
                <div class="alert alert-success">
                {{ session('info') }}
                </div>
                @endif
                <table class="table table-hover table-sm">
                    <thead>
                     
                        <th>Nombre</th>
                        <th>Pedido</th>
                        <th>Email</th>
                        
                        <th colspan="2">Acciones</th>
                    </thead> 
                    <tbody>
                        @foreach( $cliente as $cli)
                        <tr>
                     
                            <td>{{$cli->nombre}}</td>
                            <td>{{$cli->pedido}}</td>
                            <td>{{$cli->email}}</td>
                    
                            <td>
                                <a href="{{route('clientes.edit', $cli->id)}}" class="btn btn-success">Editar</a>
                            </td>
                            <td>
                            <a href="javascript: document.getElementById('delete-{{ $cli->id }}').submit()" class="btn btn-danger">Eliminar</a>
                            <form id="delete-{{ $cli->id }}" action="{{ route('clientes.destroy', $cli->id)}}" method="POST">
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