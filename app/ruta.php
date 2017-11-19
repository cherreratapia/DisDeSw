<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruta extends Model
{
    //Nombre de la tabla correspondiente en la base de datos
    protected $table = "ruta";
    //Atributos del modelo
    protected $fillable = ['id', 'Camino'];
    //Funciones del modelo
    function viajes(){
        return $this->hasMany('App\viaje');
    }
    
}
