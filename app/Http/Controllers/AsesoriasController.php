<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asesoria;

use App\Http\Requests;

class AsesoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asesorias = Asesoria::all();
        return view('admin/asesorias/index', compact('asesorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/asesorias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //guardar la imagen en el proyecto
      $file=$request->file('photo');
      //ruta donde se guarda la imagen
      $path=public_path().'/images/asesorias';
      //Nombre del archivo
      $fileName=uniqid().$file->getClientOriginalName();
      //se guarda el archivo
      $file->move($path, $fileName);

      $asesorias=new Asesoria();
      $asesorias->titulo=$request->input('Titulo');
      $asesorias->texto=$request->input('Mensaje');
      $asesorias->activo=$request->input('activar');
      $asesorias->foto=$fileName;
      $asesorias->save();

      return redirect()->route('asesorias.index');
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
        $asesorias = Asesoria::findOrFail($id);
        return view('admin/asesorias/edit', compact('asesorias'));
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
     //busca el id
      $asesorias = Asesoria::findOrFail($id);
      //le doy valores a los campos
      $asesorias->titulo=$request->input('Titulo');
      $asesorias->texto=$request->input('Mensaje');
      $asesorias->activo=$request->input('activar');
      //Guardo
      $asesorias->save();

      return redirect()->route('asesorias.index');
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
