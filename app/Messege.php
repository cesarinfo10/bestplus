<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messege extends Model
{
    protected $fillable=['nombre', 'email', 'mensaje'];
    
    //Si la tabla existe con otro nombrese agrega:
    //protected $table='nombre_de_la_tabla';
}
