<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asesoria;

use App\Http\Requests;

class ImgasesoriasController extends Controller
{
    public function index($id)
   {
     $img = Asesoria::find($id);
    return view('admin/asesorias/imagen_asesorias',compact('img'));
   }
   public function update(Request $request, $id)
   {
      //guardar la imagen en el proyecto
      $file=$request->file('photo');
      //ruta donde se guarda la imagen
      $path=public_path().'/images/asesorias';
      //Nombre del archivo
      $fileName=uniqid().$file->getClientOriginalName();
      //se guarda el archivo
      $file->move($path, $fileName);

      $asesorias = Asesoria::findOrFail($id);
      $asesorias->foto=$fileName;
      $asesorias->save();

      return redirect()->route('asesorias.index');
   }

}
