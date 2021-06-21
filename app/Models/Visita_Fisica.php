<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visita_Fisica extends Model
{
    //
    protected $table="visitas_fisicas";
    protected $primaryKey="id";
    protected $fillable=[
        'numero_de_cedula', 'año', 'fecha_de_cedula', 'calle', 'colonia', 'alcaldia', 'cuenta_catastral', 'uso', 'superficie_de_terreno', 'folio_de_solicitud', 'oficio_de_solicitud', 'referencia', 'realizo'
    ];
}
