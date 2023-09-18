<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Baremo_quiru extends Model
{
    protected $table = 'baremo_quiru';
    protected $fillable = ['id','consecuti','cod_inter','cod_clini','ced_paciente','nom_interven','nom_paciente','fecha_creado','fecha_opera','hora_opera','monto_opera','tipo_rol','pagada','medico_prin','medico_aux','historia','diagnostico','monto_abono','monto_resta','empre','hora_fin','duracion','created_at','updated_at'];
 
}

