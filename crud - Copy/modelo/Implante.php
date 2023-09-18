<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Implante extends Model
{
    protected $table = 'implante';
    protected $fillable = ['id','historia','consulta','fecha_reporte','fecha_opera','diagnostico','plan_operatorio','texto','estabilizada','componente_femoral','componente_tibial','componente_tibial_it','componente_pastelar','reque_metilmeticatrilato','reque_metilmeticatrilato_cant','reque_steridrape','reque_steridrape_cant','reque_coban_esteril','reque_coban_esteril_cant','reque_autosutura','reque_autosutura_cant','reque_orthopack','reque_orthopack_cant','sistema','marca','tipo','puro_texto','created_at','updated_at'];
 
}

