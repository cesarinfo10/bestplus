<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Nosotro;

use App\Http\Requests;

class NosotrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nosotros = Nosotro::all();
        return view('admin/nosotros/index', compact('nosotros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nosotros = Nosotro::all();
        return view('admin/nosotros/create', compact('nosotros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        Nosotro::create($request->all());
        return redirect()->route('nosotros.create');

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
        $nosotros = Nosotro::findOrFail($id);
        return view('admin/nosotros/edit', compact('nosotros'));
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
       Nosotro::findOrFail($id)->update($request->all());

        return redirect()->route('nosotros.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nosotro::findOrFail($id)->delete();
        return redirect()->route('nosotros.index');
    }
}
