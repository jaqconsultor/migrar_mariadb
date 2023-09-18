<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evolucion extends Model
{
    protected $table = 'evolucion';
    protected $fillable = ['id','especialidad','ciudad','logo','linea_1','linea_2','linea_3','lineag_1','lineag_2','clave','fecha','rif','reporte_vacio','moneda','impuesto','por_impues','am_pm','cantidad_paciente','lunes_i','lunes_f','martes_i','martes_f','miercoles_i','miercoles_f','jueves_i','jueves_f','vienes_i','viernes_f','sabado_i','sabado_f','tiempo_paci','domingo_i','domigo_f','lunes','martes','miercoles','jueves','viernes','sabado','domingo','feriado','cedula','min_salud','col_med','cita_previa','telefono','cobra_honorarios','por_cobranza','por_retención_seg','por_retención_part','accionista','consultorio','contrasena','paga_iva','sms_proveedor','sms_user','sms_clave','sms_cantidad_total','sms_telefono_llamada','sms_sexo_medico','correo_med','created_at','updated_at'];
 
}

