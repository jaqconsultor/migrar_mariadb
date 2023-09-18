<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presupuesto_operatorio extends Model
{
    protected $table = 'presupuesto_operatorio';
    protected $fillable = ['id','documento','historia','diagnostico','intervencion','ayudantes','dias_hospi','arco_c','astroscopio','sangre_qx_tipo_1','sangre_qx_tipo_2','sangre_qx_tipo_1_cantidad','sangre_qx_tipo_2_cantidad','material_sintesis','instrumental_traumatologico','honorarios','observaciones','fecha','estado','clinica','procedencia','h_1_ayudante','horas_quirofano','h_2_ayudante','h_anestesiologo','rx_postoperatoria','rx_torax','h_tratante','fluoroscopio','h_artroscopio','eval_preoperatoria','otros_estudios_de_imagenes','interconsultas','otro_1_tex','otro_1_deta','otro_2_tex','otro_2_deta','created_at','updated_at'];
 
}

