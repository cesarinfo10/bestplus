<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Http\Requests;

class ImageController extends Controller
{
   public function index($id)
   {
     $img = Slider::find($id);
    return view('admin/slider/imagen_slider',compact('img'));
   }
   public function update(Request $request, $id)
   {
      //guardar la imagen en el proyecto
      $file=$request->file('photo');
      //ruta donde se guarda la imagen
      $path=public_path().'/images/slider';
      //Nombre del archivo
      $fileName=uniqid().$file->getClientOriginalName();
      //se guarda el archivo
      $file->move($path, $fileName);

      $sliders = Slider::findOrFail($id);
      $sliders->foto=$fileName;
      $sliders->save();

      return redirect()->route('slider.index');
   }

}
