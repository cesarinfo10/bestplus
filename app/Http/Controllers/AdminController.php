<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/index');
    }

    public function principal(){
        return view('admin/principal');
    }
}
