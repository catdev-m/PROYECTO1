@extends('layouts/app')

@section('title', 'proyectos')

@section('contenido')
<div class="lg:w-10/12 w-full h-auto">
    <div class="w-full lg:h-24 h-16 lg:py-7 py-4 px-6 lg:text-left text-white text-center bg-blue-500">
        <p class="lg:text-4xl text-2xl">Tus Proyectos.</p>
    </div>
    <div class="w-full h-auto">
        <div class="grid grid-cols-5 text-center my-5 p-4">
            <div class="bg-blue-300 p-4"><p class="lg:text-base text-xs">Nombre</p></div>
            <div class="bg-blue-300 p-4"><p class="lg:text-base text-xs">Descripcion</p></div>
            <div class="bg-blue-300 p-4"><p class="lg:text-base text-xs">Administrador</p></div>
            <div class="bg-blue-300 p-4"><p class="lg:text-base text-xs"> Equipo</p></div>
            <div class="bg-blue-300 p-4"><p class="lg:text-base text-xs">Repositorios</p></div>
        </div>
    </div>
</div>
  
@endsection