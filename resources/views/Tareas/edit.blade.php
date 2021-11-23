@extends('layouts.plantillabase');

@section('contenido')
<h2>EDITAR TAREAS</h2>


<form action="/tareas/{{$tarea->id}}" method="POST">
    @csrf

    @method('PUT')

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input id="titulo" name="titulo" type="text" class="form-control" value="{{$tarea->titulo}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$tarea->descripcion}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Prioridad (Baja, Media, Alta)</label>
  <input id="prioridad" name="prioridad" type="text" class="form-control" value="{{$tarea->prioridad}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Estado (Nuevo, En Espera, En desarrollo)</label>
  <input id="estado" name="estado" type="text" class="form-control" value="{{$tarea->estado}}">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha de Entrega</label>
  <input id="fecha" name="fecha" type="timestamps" class="form-control" value="{{$tarea->fecha}}">
</div>


<a href="/tareas" class="btn btn-secondary">Cancelar</a>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection