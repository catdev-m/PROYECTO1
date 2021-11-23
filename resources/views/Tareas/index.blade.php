@extends('layouts.plantillabase');

@section('contenido')
<a href="tareas/create" class="btn btn-primary">CREAR</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">N°</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Prioridad</th>
            <th scope="col">Estado</th>
            <th scope="col">Fecha</th>


            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Tareas as $tarea)
        <tr>
            <td>{{$tarea->id}}</td>
            <td>{{$tarea->titulo}}</td>
            <td>{{$tarea->descripcion}}</td>
            <td>{{$tarea->prioridad}}</td>
            <td>{{$tarea->estado}}</td>
            <td>{{$tarea->fecha}}</td>

            <td>
                <form action="{{ route ('tareas.destroy',$tarea->id)}}"method="POST">
                <a href="/tareas/{{ $tarea->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>

        </tr>
        @endforeach
    </tbody>
</table>    
@endsection