<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Foto;

use App\Http\Requests;

class FotosController extends Controller
{
  function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        $fotos = Foto::all();
        return view('admin/fotos/index', compact('fotos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $fotos = Foto::all();
        return view('admin/fotos/create', compact('fotos'));
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
      $path=public_path().'/images/portfolio';
      //Nombre del archivo
      $fileName=uniqid().$file->getClientOriginalName();
      //se guarda el archivo
      $file->move($path, $fileName);

      $fotos=new Foto();
      $fotos->foto=$fileName;
      $fotos->activo=$request->input('activar');
      $fotos->save();

      return redirect()->route('fotos.create');
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
        $fotos = Foto::find($id);
        return view('admin/fotos/imagen_album',compact('fotos'));
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
             //guardar la imagen en el proyecto
                $file=$request->file('photo');
                //ruta donde se guarda la imagen
                $path=public_path().'/images/portfolio';
                //Nombre del archivo
                $fileName=uniqid().$file->getClientOriginalName();
                //se guarda el archivo
                $file->move($path, $fileName);

                $fotos = Foto::findOrFail($id);
                $fotos->foto=$fileName;
                $fotos->save();

                return redirect()->route('fotos.index');
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

    public function activar($id)
    {
        $fotos = Foto::findOrFail($id);
        $fotos->activo=1;
        $fotos->save();

        return redirect()->route('fotos.index');
    }

    public function inactivo($id)
    {
        $fotos = Foto::findOrFail($id);
        $fotos->activo=2;
        $fotos->save();

        return redirect()->route('fotos.index');
    }

}
