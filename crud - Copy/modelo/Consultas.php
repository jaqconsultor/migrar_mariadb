<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    protected $table = 'consultas';
    protected $fillable = ['id','numhistoria','nroconsulta','fecha','enfermedadactual','peso','talla','fc','pp','circcefalica','circtoraxica','circabdominal','tasentado','taacostado','tapie','resultadoexamencomp','eliminado','faringe','nariz','oido','laringe','cuello','otros','evolucion','observaciones','medico','receta','receta_indi','created_at','updated_at'];
 
}

