<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asesoria extends Model
{
    public function getUrlAttribute()
    {
       if (substr($this->foto, 0, 4)==="http"){
           return $this->foto;
       }
       return 'images/asesorias/'.$this->foto;
    }
}
