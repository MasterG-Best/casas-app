@extends('plantilla')
@section('contenido')
    <x-menu />
    <h1>LISTADO DE CLIENTES</h1>
    <a href="clientes/crear">CREAR NUEVO CLIENTE</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo Electronico</th>
                <th>Direccion</th>
                <th>Accione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->telefono }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->direccion }}</td>
                    <td>
                        <a href="clientes/mostrar/{{ $cliente->id}}">Mostrar</a>
                        <a href="clientes/editar/{{ $cliente->id}}">Editar</a>
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection