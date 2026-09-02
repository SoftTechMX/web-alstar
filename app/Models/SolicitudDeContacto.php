<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SolicitudDeContacto extends Model
{
    protected $table = "solicitudes_de_contacto";

    protected $guarded = [];

    public $timestamps = true;
}
