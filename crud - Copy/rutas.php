<?php

     Route::resource('antecedentes', App\Http\Controllers\tablas\AntecedentesController::class);

     Route::resource('antece_paciente', App\Http\Controllers\tablas\Antece_pacienteController::class);

     Route::resource('bancos', App\Http\Controllers\tablas\BancosController::class);

     Route::resource('baremo_quiru', App\Http\Controllers\tablas\Baremo_quiruController::class);

     Route::resource('categoria', App\Http\Controllers\tablas\CategoriaController::class);

     Route::resource('clinicas', App\Http\Controllers\tablas\ClinicasController::class);

     Route::resource('cola', App\Http\Controllers\tablas\ColaController::class);

     Route::resource('cola_dia_no_labor', App\Http\Controllers\tablas\Cola_dia_no_laborController::class);

     Route::resource('constancia_obs', App\Http\Controllers\tablas\Constancia_obsController::class);

     Route::resource('consultas', App\Http\Controllers\tablas\ConsultasController::class);

     Route::resource('consultorios', App\Http\Controllers\tablas\ConsultoriosController::class);

     Route::resource('cuentas_x_pagar', App\Http\Controllers\tablas\Cuentas_x_pagarController::class);

     Route::resource('cuentas_x_pagar_mov', App\Http\Controllers\tablas\Cuentas_x_pagar_movController::class);

     Route::resource('customer', App\Http\Controllers\tablas\CustomerController::class);

     Route::resource('department', App\Http\Controllers\tablas\DepartmentController::class);

     Route::resource('detalles_factura_cliente', App\Http\Controllers\tablas\Detalles_factura_clienteController::class);

     Route::resource('detalles_presupuesto_plantilla', App\Http\Controllers\tablas\Detalles_presupuesto_plantillaController::class);

     Route::resource('diagnosticos', App\Http\Controllers\tablas\DiagnosticosController::class);

     Route::resource('diagnostico_paciente', App\Http\Controllers\tablas\Diagnostico_pacienteController::class);

     Route::resource('dias_semana', App\Http\Controllers\tablas\Dias_semanaController::class);

     Route::resource('doctores', App\Http\Controllers\tablas\DoctoresController::class);

     Route::resource('emision_pagos', App\Http\Controllers\tablas\Emision_pagosController::class);

     Route::resource('emision_pagos_detalle', App\Http\Controllers\tablas\Emision_pagos_detalleController::class);

     Route::resource('employee', App\Http\Controllers\tablas\EmployeeController::class);

     Route::resource('especial', App\Http\Controllers\tablas\EspecialController::class);

     Route::resource('especialidads', App\Http\Controllers\tablas\EspecialidadsController::class);

     Route::resource('evolucion', App\Http\Controllers\tablas\EvolucionController::class);

     Route::resource('examenes', App\Http\Controllers\tablas\ExamenesController::class);

     Route::resource('examen_fisico', App\Http\Controllers\tablas\Examen_fisicoController::class);

     Route::resource('examen_obs', App\Http\Controllers\tablas\Examen_obsController::class);

     Route::resource('examen_paciente', App\Http\Controllers\tablas\Examen_pacienteController::class);

     Route::resource('facturas_compras', App\Http\Controllers\tablas\Facturas_comprasController::class);

     Route::resource('facturas_compras_detalle', App\Http\Controllers\tablas\Facturas_compras_detalleController::class);

     Route::resource('factura_cliente', App\Http\Controllers\tablas\Factura_clienteController::class);

     Route::resource('failed_jobs', App\Http\Controllers\tablas\Failed_jobsController::class);

     Route::resource('files', App\Http\Controllers\tablas\FilesController::class);

     Route::resource('formato_print', App\Http\Controllers\tablas\Formato_printController::class);

     Route::resource('gsistema', App\Http\Controllers\tablas\GsistemaController::class);

     Route::resource('his_con_pre_factura', App\Http\Controllers\tablas\His_con_pre_facturaController::class);

     Route::resource('hospitalizacion', App\Http\Controllers\tablas\HospitalizacionController::class);

     Route::resource('imagen_consulta', App\Http\Controllers\tablas\Imagen_consultaController::class);

     Route::resource('imagen_pacientes', App\Http\Controllers\tablas\Imagen_pacientesController::class);

     Route::resource('implante', App\Http\Controllers\tablas\ImplanteController::class);

     Route::resource('informe', App\Http\Controllers\tablas\InformeController::class);

     Route::resource('intenven_servi', App\Http\Controllers\tablas\Intenven_serviController::class);

     Route::resource('interven_consulta', App\Http\Controllers\tablas\Interven_consultaController::class);

     Route::resource('listado', App\Http\Controllers\tablas\ListadoController::class);

     Route::resource('migrations', App\Http\Controllers\tablas\MigrationsController::class);

     Route::resource('motivos_consulta', App\Http\Controllers\tablas\Motivos_consultaController::class);

     Route::resource('motivo_cita', App\Http\Controllers\tablas\Motivo_citaController::class);

     Route::resource('motivo_consulta_paciente', App\Http\Controllers\tablas\Motivo_consulta_pacienteController::class);

     Route::resource('motivo_factura', App\Http\Controllers\tablas\Motivo_facturaController::class);

     Route::resource('motivo_factura_prov', App\Http\Controllers\tablas\Motivo_factura_provController::class);

     Route::resource('operadores', App\Http\Controllers\tablas\OperadoresController::class);

     Route::resource('orden_ingreso', App\Http\Controllers\tablas\Orden_ingresoController::class);

     Route::resource('ortopedia', App\Http\Controllers\tablas\OrtopediaController::class);

     Route::resource('pacientes', App\Http\Controllers\tablas\PacientesController::class);

     Route::resource('paciente_no_regi', App\Http\Controllers\tablas\Paciente_no_regiController::class);

     Route::resource('pago_quiru', App\Http\Controllers\tablas\Pago_quiruController::class);

     Route::resource('palm_lista', App\Http\Controllers\tablas\Palm_listaController::class);

     Route::resource('pantece', App\Http\Controllers\tablas\PanteceController::class);

     Route::resource('password_resets', App\Http\Controllers\tablas\Password_resetsController::class);

     Route::resource('pbcatcol', App\Http\Controllers\tablas\PbcatcolController::class);

     Route::resource('pbcatedt', App\Http\Controllers\tablas\PbcatedtController::class);

     Route::resource('pbcatfmt', App\Http\Controllers\tablas\PbcatfmtController::class);

     Route::resource('pbcattbl', App\Http\Controllers\tablas\PbcattblController::class);

     Route::resource('pbcatvld', App\Http\Controllers\tablas\PbcatvldController::class);

     Route::resource('pcola', App\Http\Controllers\tablas\PcolaController::class);

     Route::resource('pconsult', App\Http\Controllers\tablas\PconsultController::class);

     Route::resource('pdiagno', App\Http\Controllers\tablas\PdiagnoController::class);

     Route::resource('personal_access_tokens', App\Http\Controllers\tablas\Personal_access_tokensController::class);

     Route::resource('pmoti_co', App\Http\Controllers\tablas\Pmoti_coController::class);

     Route::resource('ppacient', App\Http\Controllers\tablas\PpacientController::class);

     Route::resource('pprocedi', App\Http\Controllers\tablas\PprocediController::class);

     Route::resource('precipe', App\Http\Controllers\tablas\PrecipeController::class);

     Route::resource('presupuesto', App\Http\Controllers\tablas\PresupuestoController::class);

     Route::resource('presupuesto_operatorio', App\Http\Controllers\tablas\Presupuesto_operatorioController::class);

     Route::resource('presupuesto_planti', App\Http\Controllers\tablas\Presupuesto_plantiController::class);

     Route::resource('proveedor', App\Http\Controllers\tablas\ProveedorController::class);

     Route::resource('pvademe', App\Http\Controllers\tablas\PvademeController::class);

     Route::resource('p_ante', App\Http\Controllers\tablas\P_anteController::class);

     Route::resource('p_diagno', App\Http\Controllers\tablas\P_diagnoController::class);

     Route::resource('p_epecial', App\Http\Controllers\tablas\P_epecialController::class);

     Route::resource('p_examen', App\Http\Controllers\tablas\P_examenController::class);

     Route::resource('p_motic', App\Http\Controllers\tablas\P_moticController::class);

     Route::resource('p_seg', App\Http\Controllers\tablas\P_segController::class);

     Route::resource('p_tipoe', App\Http\Controllers\tablas\P_tipoeController::class);

     Route::resource('radiologias', App\Http\Controllers\tablas\RadiologiasController::class);

     Route::resource('radiologia_obs', App\Http\Controllers\tablas\Radiologia_obsController::class);

     Route::resource('radiologia_paciente', App\Http\Controllers\tablas\Radiologia_pacienteController::class);

     Route::resource('recipe2', App\Http\Controllers\tablas\Recipe2Controller::class);

     Route::resource('recipes', App\Http\Controllers\tablas\RecipesController::class);

     Route::resource('recipe_detalle', App\Http\Controllers\tablas\Recipe_detalleController::class);

     Route::resource('recipe_grupo', App\Http\Controllers\tablas\Recipe_grupoController::class);

     Route::resource('recipe_grupo_detalle', App\Http\Controllers\tablas\Recipe_grupo_detalleController::class);

     Route::resource('recipe_obs', App\Http\Controllers\tablas\Recipe_obsController::class);

     Route::resource('referencia', App\Http\Controllers\tablas\ReferenciaController::class);

     Route::resource('registro_empleados', App\Http\Controllers\tablas\Registro_empleadosController::class);

     Route::resource('registro_empleados_eje', App\Http\Controllers\tablas\Registro_empleados_ejeController::class);

     Route::resource('registro_empleados_eje_detalle', App\Http\Controllers\tablas\Registro_empleados_eje_detalleController::class);

     Route::resource('reg_empl_frec_nomina', App\Http\Controllers\tablas\Reg_empl_frec_nominaController::class);

     Route::resource('reg_empl_tipo_nomina', App\Http\Controllers\tablas\Reg_empl_tipo_nominaController::class);

     Route::resource('reposo_paciente', App\Http\Controllers\tablas\Reposo_pacienteController::class);

     Route::resource('representante', App\Http\Controllers\tablas\RepresentanteController::class);

     Route::resource('roles', App\Http\Controllers\tablas\RolesController::class);

     Route::resource('seg_emp', App\Http\Controllers\tablas\Seg_empController::class);

     Route::resource('sms_compra', App\Http\Controllers\tablas\Sms_compraController::class);

     Route::resource('sms_enviados', App\Http\Controllers\tablas\Sms_enviadosController::class);

     Route::resource('sms_envio_pac', App\Http\Controllers\tablas\Sms_envio_pacController::class);

     Route::resource('sysopciones', App\Http\Controllers\tablas\SysopcionesController::class);

     Route::resource('tipos_conceptos', App\Http\Controllers\tablas\Tipos_conceptosController::class);

     Route::resource('tipos_documentos', App\Http\Controllers\tablas\Tipos_documentosController::class);

     Route::resource('tipos_examenes', App\Http\Controllers\tablas\Tipos_examenesController::class);

     Route::resource('tipo_antecedente', App\Http\Controllers\tablas\Tipo_antecedenteController::class);

     Route::resource('users', App\Http\Controllers\tablas\UsersController::class);

     Route::resource('vademecum', App\Http\Controllers\tablas\VademecumController::class);

     Route::resource('vademecum_m', App\Http\Controllers\tablas\Vademecum_mController::class);
