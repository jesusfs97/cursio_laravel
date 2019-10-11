<?php

namespace App\Http\Controllers;
 
use App\Project;
 
use Illuminate\Http\Request;


class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Proyectos.index' , [
            'Proyectos' => Project::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Proyectos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required',
            'url' => 'required',
        ]); #todo esto lo podriamos guardar en la variable DATOS
        
        //recibimos los datos y los asignamos a variables
        $titulo = $request->get('titulo');
        $descripcion = $request->get('descripcion');
        $url = $request->get('url');

        Project::create([ # <-- este es el modelo project que creamos
            'titulo'=> $titulo,
            'descripcion'=> $descripcion,
            'url'=> $url,
        ]);

        /* OTRO METODO seria 
            Project::create(request()->all()) pero si deshabilitamos la propiedad fillable
            Project::create($DATOS)*/

        return redirect()->route('proyects.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $Proyect)
    {   // el metodo find es para buscar un registro en este caso por ID
        ;

        return view('Proyectos.show' , [
            'proyect' => $Proyect
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $Proyect)
    {
        return view ('Proyectos.editar',[
            'proyecto' => $Proyect
            // la primer variable va a ser la que se mande a la vista
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $Proyect)
    {   
        request()->validate([
        'titulo' => 'required',
        'descripcion' => 'required',
        'url' => 'required',]);

        $Proyect->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'url' => request('url')
        ]);
        return redirect()->route('proyects.ver', $Proyect);
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
    }
}
