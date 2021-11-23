<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tareas;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tareas::all();
        return view('Tareas.index')->with('Tareas', $tareas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Tareas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tareas = new Tareas();
        $tareas->titulo = $request->get('titulo');
        $tareas->descripcion = $request->get('descripcion');
        $tareas->prioridad = $request->get('prioridad');
        $tareas->estado = $request->get('estado');
        $tareas->fecha = $request->get('fecha');


        $tareas->save();

        return redirect('/tareas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tareas::find($id);
        return view('Tareas.edit')->with('tarea',$tarea);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tarea = Tareas::find($id);

        $tarea->titulo = $request->get('titulo');
        $tarea->descripcion = $request->get('descripcion');
        $tarea->prioridad = $request->get('prioridad');
        $tarea->estado = $request->get('estado');
        $tarea->fecha = $request->get('fecha');


        $tarea->save();

        return redirect('/tareas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tarea = Tareas::find($id);


        $tarea->delete();

        return redirect('/tareas');
    }
}
