<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;

use App\Http\Requests;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sliders = Slider::all();
       return view('admin/slider/index', compact('sliders'));
    }
     
    function validar(Request $request){

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/slider/create');
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
      $path=public_path().'/images/slider';
      //Nombre del archivo
      $fileName=uniqid().$file->getClientOriginalName();
      //se guarda el archivo
      $file->move($path, $fileName);

      $slider=new Slider();
      $slider->titulo=$request->input('Titulo');
      $slider->texto=$request->input('Mensaje');
      $slider->activo=$request->input('activar');
      $slider->foto=$fileName;
      $slider->save();

      return redirect()->route('slider.index');
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
        $sliders = Slider::findOrFail($id);
        return view('admin/slider/edit', compact('sliders'));
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
      $sliders = Slider::findOrFail($id);
      //le doy valores a los campos
      $sliders->titulo=$request->input('Titulo');
      $sliders->texto=$request->input('Mensaje');
      $sliders->activo=$request->input('activar');
      //Guardo
      $sliders->save();

      return redirect()->route('slider.index');
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
