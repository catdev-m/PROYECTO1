@extends('layouts.plantillabase');

@section('contenido')
<h2>CREAR TAREAS </h2>

<form action="/tareas" method="POST">
    @csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">
</div>
<div class="mb-3">
  <label for="" class="form-label">Descripcion</label>
  <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
</div>
<div class="mb-3">
  <label for="" class="form-label">Prioridad (Baja, Media, Alta)</label>
  <input id="prioridad" name="prioridad" type="text" class="form-control" tabindex="3">
</div>
<div class="mb-3">
  <label for="" class="form-label">Estado (Nuevo, En Espera, En desarrollo)</label>
  <input id="estado" name="estado" type="text" class="form-control" tabindex="4">
</div>
<div class="mb-3">
  <label for="" class="form-label">Fecha de Entrega</label>
  <input id="fecha" name="fecha" type="timestamps" class="form-control" tabindex="5">
</div>
<a href="/tareas" class="btn btn-secondary" tabindex="7">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@endsection