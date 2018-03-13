<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//modelos

use App\Nosotro;
use App\Slider;
use App\Asesoria;
use App\Foto;

use App\Http\Requests\CreateMessageRequest;

class PagesControllers extends Controller
{

    public function __construct(){
        $this->middleware('example',['except'=>['home']]);
    }

    protected $request;

    public function home(){
        $nosotros = Nosotro::all();
        $sliders = Slider::all()->where('activo', 1);
        $asesorias = Asesoria::all()->where('activo', 1);
        $fotos=Foto::all()->where('activo',1);

        return view('index', compact('nosotros','sliders', 'asesorias','fotos'));

    }

}
