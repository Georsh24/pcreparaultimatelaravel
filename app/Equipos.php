<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    protected $table ="Equipos";
    
    protected $fillable = ['codigo', 'model', 'serie', 'descripcion', 'estado', 'costo', 'nombre', 'telefono', 'email', 'created_at', 'updated_at', ];
}
