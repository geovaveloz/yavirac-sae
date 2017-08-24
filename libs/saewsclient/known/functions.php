<?php
require_once './../../../libs/saewsclient/lib/nusoap.php';
require_once './../../../libs/saewsclient/const/defaults.php';
require_once 'funciones_especificas.php';

// FUNCIONES CRUD Persona

function createPersona($identificacion,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$idGenero,$idDomicilio,$idEstadoCivil,$idUbicacionNacimiento,$ingresos,$idTipoSangre,$numeroHijos,$idOcupacion,$foto){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createPersona',array('identificacion'=>$identificacion, 'nombre1'=>$nombre1, 'nombre2'=>$nombre2, 'apellido1'=>$apellido1, 'apellido2'=>$apellido2, 'fechaNacimiento'=>$fechaNacimiento, 'idGenero'=>$idGenero, 'idDomicilio'=>$idDomicilio, 'idEstadoCivil'=>$idEstadoCivil, 'idUbicacionNacimiento'=>$idUbicacionNacimiento, 'ingresos'=>$ingresos, 'idTipoSangre'=>$idTipoSangre, 'numeroHijos'=>$numeroHijos, 'idOcupacion'=>$idOcupacion, 'foto'=>$foto));
   return $result;
}

function readPersona($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPersona',array('id'=>$id));
   return $result;
}

function readPersonaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPersonaAll',array());
   return $result;
}

function updatePersona($id,$identificacion,$nombre1,$nombre2,$apellido1,$apellido2,$fechaNacimiento,$idGenero,$idDomicilio,$idEstadoCivil,$idUbicacionNacimiento,$ingresos,$idTipoSangre,$numeroHijos,$idOcupacion,$foto){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updatePersona',array('id'=>$id, 'identificacion'=>$identificacion, 'nombre1'=>$nombre1, 'nombre2'=>$nombre2, 'apellido1'=>$apellido1, 'apellido2'=>$apellido2, 'fechaNacimiento'=>$fechaNacimiento, 'idGenero'=>$idGenero, 'idDomicilio'=>$idDomicilio, 'idEstadoCivil'=>$idEstadoCivil, 'idUbicacionNacimiento'=>$idUbicacionNacimiento, 'ingresos'=>$ingresos, 'idTipoSangre'=>$idTipoSangre, 'numeroHijos'=>$numeroHijos, 'idOcupacion'=>$idOcupacion, 'foto'=>$foto));
   return $result;
}

function deletePersona($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deletePersona',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD TipoSangre

function createTipoSangre($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTipoSangre',array('descripcion'=>$descripcion));
   return $result;
}

function readTipoSangre($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoSangre',array('id'=>$id));
   return $result;
}

function readTipoSangreAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoSangreAll',array());
   return $result;
}

function updateTipoSangre($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTipoSangre',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteTipoSangre($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTipoSangre',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Ubicacion

function createUbicacion($descripcion,$idPadre){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createUbicacion',array('descripcion'=>$descripcion, 'idPadre'=>$idPadre));
   return $result;
}

function readUbicacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readUbicacion',array('id'=>$id));
   return $result;
}

function readUbicacionAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readUbicacionAll',array());
   return $result;
}

function updateUbicacion($id,$descripcion,$idPadre){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateUbicacion',array('id'=>$id, 'descripcion'=>$descripcion, 'idPadre'=>$idPadre));
   return $result;
}

function deleteUbicacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteUbicacion',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Estudiante

function createEstudiante($idColegio){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEstudiante',array('idColegio'=>$idColegio));
   return $result;
}

function readEstudiante($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstudiante',array('id'=>$id));
   return $result;
}

function readEstudianteAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstudianteAll',array());
   return $result;
}

function updateEstudiante($id,$idColegio){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEstudiante',array('id'=>$id, 'idColegio'=>$idColegio));
   return $result;
}

function deleteEstudiante($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEstudiante',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD DatosEstudiante

function createDatosEstudiante($idEstudiante,$descripcion,$dato){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDatosEstudiante',array('idEstudiante'=>$idEstudiante, 'descripcion'=>$descripcion, 'dato'=>$dato));
   return $result;
}

function readDatosEstudiante($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDatosEstudiante',array('id'=>$id));
   return $result;
}

function readDatosEstudianteAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDatosEstudianteAll',array());
   return $result;
}

function updateDatosEstudiante($id,$idEstudiante,$descripcion,$dato){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDatosEstudiante',array('id'=>$id, 'idEstudiante'=>$idEstudiante, 'descripcion'=>$descripcion, 'dato'=>$dato));
   return $result;
}

function deleteDatosEstudiante($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDatosEstudiante',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Jornada

function createJornada($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createJornada',array('descripcion'=>$descripcion));
   return $result;
}

function readJornada($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readJornada',array('id'=>$id));
   return $result;
}

function readJornadaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readJornadaAll',array());
   return $result;
}

function updateJornada($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateJornada',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteJornada($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteJornada',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD ExperienciaLaboral

function createExperienciaLaboral($idPersona,$fechaInicio,$fechaFin,$descripcionCargo,$descripcionFunciones,$nombreEmpresa,$idMotivoSalida){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createExperienciaLaboral',array('idPersona'=>$idPersona, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin, 'descripcionCargo'=>$descripcionCargo, 'descripcionFunciones'=>$descripcionFunciones, 'nombreEmpresa'=>$nombreEmpresa, 'idMotivoSalida'=>$idMotivoSalida));
   return $result;
}

function readExperienciaLaboral($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readExperienciaLaboral',array('id'=>$id));
   return $result;
}

function readExperienciaLaboralAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readExperienciaLaboralAll',array());
   return $result;
}

function updateExperienciaLaboral($id,$idPersona,$fechaInicio,$fechaFin,$descripcionCargo,$descripcionFunciones,$nombreEmpresa,$idMotivoSalida){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateExperienciaLaboral',array('id'=>$id, 'idPersona'=>$idPersona, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin, 'descripcionCargo'=>$descripcionCargo, 'descripcionFunciones'=>$descripcionFunciones, 'nombreEmpresa'=>$nombreEmpresa, 'idMotivoSalida'=>$idMotivoSalida));
   return $result;
}

function deleteExperienciaLaboral($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteExperienciaLaboral',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD MotivoSalida

function createMotivoSalida($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createMotivoSalida',array('descripcion'=>$descripcion));
   return $result;
}

function readMotivoSalida($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMotivoSalida',array('id'=>$id));
   return $result;
}

function readMotivoSalidaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMotivoSalidaAll',array());
   return $result;
}

function updateMotivoSalida($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateMotivoSalida',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteMotivoSalida($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteMotivoSalida',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD EducacionContinua

function createEducacionContinua($descripcion,$horas,$fechaInicio,$fechaFin,$idTipoEducacionContinua,$lugar){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEducacionContinua',array('descripcion'=>$descripcion, 'horas'=>$horas, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin, 'idTipoEducacionContinua'=>$idTipoEducacionContinua, 'lugar'=>$lugar));
   return $result;
}

function readEducacionContinua($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEducacionContinua',array('id'=>$id));
   return $result;
}

function readEducacionContinuaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEducacionContinuaAll',array());
   return $result;
}

function updateEducacionContinua($id,$descripcion,$horas,$fechaInicio,$fechaFin,$idTipoEducacionContinua,$lugar){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEducacionContinua',array('id'=>$id, 'descripcion'=>$descripcion, 'horas'=>$horas, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin, 'idTipoEducacionContinua'=>$idTipoEducacionContinua, 'lugar'=>$lugar));
   return $result;
}

function deleteEducacionContinua($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEducacionContinua',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD TipoEducacionContinua

function createTipoEducacionContinua($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTipoEducacionContinua',array('descripcion'=>$descripcion));
   return $result;
}

function readTipoEducacionContinua($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoEducacionContinua',array('id'=>$id));
   return $result;
}

function readTipoEducacionContinuaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoEducacionContinuaAll',array());
   return $result;
}

function updateTipoEducacionContinua($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTipoEducacionContinua',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteTipoEducacionContinua($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTipoEducacionContinua',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Aula

function createAula($capacidad,$descripcion,$idTipoAula){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createAula',array('capacidad'=>$capacidad, 'descripcion'=>$descripcion, 'idTipoAula'=>$idTipoAula));
   return $result;
}

function readAula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAula',array('id'=>$id));
   return $result;
}

function readAulaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAulaAll',array());
   return $result;
}

function updateAula($id,$capacidad,$descripcion,$idTipoAula){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateAula',array('id'=>$id, 'capacidad'=>$capacidad, 'descripcion'=>$descripcion, 'idTipoAula'=>$idTipoAula));
   return $result;
}

function deleteAula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteAula',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD TipoAula

function createTipoAula($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTipoAula',array('descripcion'=>$descripcion));
   return $result;
}

function readTipoAula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoAula',array('id'=>$id));
   return $result;
}

function readTipoAulaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoAulaAll',array());
   return $result;
}

function updateTipoAula($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTipoAula',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteTipoAula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTipoAula',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Genero

function createGenero($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createGenero',array('descripcion'=>$descripcion));
   return $result;
}

function readGenero($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readGenero',array('id'=>$id));
   return $result;
}

function readGeneroAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readGeneroAll',array());
   return $result;
}

function updateGenero($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateGenero',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteGenero($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteGenero',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Contacto

function createContacto($idPersona,$descripcion,$contacto){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createContacto',array('idPersona'=>$idPersona, 'descripcion'=>$descripcion, 'contacto'=>$contacto));
   return $result;
}

function readContacto($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readContacto',array('id'=>$id));
   return $result;
}

function readContactoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readContactoAll',array());
   return $result;
}

function updateContacto($id,$idPersona,$descripcion,$contacto){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateContacto',array('id'=>$id, 'idPersona'=>$idPersona, 'descripcion'=>$descripcion, 'contacto'=>$contacto));
   return $result;
}

function deleteContacto($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteContacto',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Asignatura

function createAsignatura($idMalla,$codigo,$nombre,$nivel,$idDocumentoPea,$horasPractica,$horasDocente,$horasAutonomas){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createAsignatura',array('idMalla'=>$idMalla, 'codigo'=>$codigo, 'nombre'=>$nombre, 'nivel'=>$nivel, 'idDocumentoPea'=>$idDocumentoPea, 'horasPractica'=>$horasPractica, 'horasDocente'=>$horasDocente, 'horasAutonomas'=>$horasAutonomas));
   return $result;
}

function readAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsignatura',array('id'=>$id));
   return $result;
}

function readAsignaturaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsignaturaAll',array());
   return $result;
}

function updateAsignatura($id,$idMalla,$codigo,$nombre,$nivel,$idDocumentoPea,$horasPractica,$horasDocente,$horasAutonomas){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateAsignatura',array('id'=>$id, 'idMalla'=>$idMalla, 'codigo'=>$codigo, 'nombre'=>$nombre, 'nivel'=>$nivel, 'idDocumentoPea'=>$idDocumentoPea, 'horasPractica'=>$horasPractica, 'horasDocente'=>$horasDocente, 'horasAutonomas'=>$horasAutonomas));
   return $result;
}

function deleteAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteAsignatura',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Titulo

function createTitulo($idPersona,$idInstitucion,$codigoRegistro,$idNivelTitulo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTitulo',array('idPersona'=>$idPersona, 'idInstitucion'=>$idInstitucion, 'codigoRegistro'=>$codigoRegistro, 'idNivelTitulo'=>$idNivelTitulo));
   return $result;
}

function readTitulo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTitulo',array('id'=>$id));
   return $result;
}

function readTituloAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTituloAll',array());
   return $result;
}

function updateTitulo($id,$idPersona,$idInstitucion,$codigoRegistro,$idNivelTitulo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTitulo',array('id'=>$id, 'idPersona'=>$idPersona, 'idInstitucion'=>$idInstitucion, 'codigoRegistro'=>$codigoRegistro, 'idNivelTitulo'=>$idNivelTitulo));
   return $result;
}

function deleteTitulo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTitulo',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Requisito

function createRequisito($idAsignaturaDependiente,$idAsignaturaIndependiente,$idTipoRequisito){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createRequisito',array('idAsignaturaDependiente'=>$idAsignaturaDependiente, 'idAsignaturaIndependiente'=>$idAsignaturaIndependiente, 'idTipoRequisito'=>$idTipoRequisito));
   return $result;
}

function readRequisito($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readRequisito',array('id'=>$id));
   return $result;
}

function readRequisitoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readRequisitoAll',array());
   return $result;
}

function updateRequisito($id,$idAsignaturaDependiente,$idAsignaturaIndependiente,$idTipoRequisito){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateRequisito',array('id'=>$id, 'idAsignaturaDependiente'=>$idAsignaturaDependiente, 'idAsignaturaIndependiente'=>$idAsignaturaIndependiente, 'idTipoRequisito'=>$idTipoRequisito));
   return $result;
}

function deleteRequisito($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteRequisito',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD TipoRequisito

function createTipoRequisito($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTipoRequisito',array('descripcion'=>$descripcion));
   return $result;
}

function readTipoRequisito($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoRequisito',array('id'=>$id));
   return $result;
}

function readTipoRequisitoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoRequisitoAll',array());
   return $result;
}

function updateTipoRequisito($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTipoRequisito',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteTipoRequisito($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTipoRequisito',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Malla

function createMalla($fechaMallaInicio,$fechaMallaFin,$idCarrera,$idDocResolucion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createMalla',array('fechaMallaInicio'=>$fechaMallaInicio, 'fechaMallaFin'=>$fechaMallaFin, 'idCarrera'=>$idCarrera, 'idDocResolucion'=>$idDocResolucion));
   return $result;
}

function readMalla($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMalla',array('id'=>$id));
   return $result;
}

function readMallaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMallaAll',array());
   return $result;
}

function updateMalla($id,$fechaMallaInicio,$fechaMallaFin,$idCarrera,$idDocResolucion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateMalla',array('id'=>$id, 'fechaMallaInicio'=>$fechaMallaInicio, 'fechaMallaFin'=>$fechaMallaFin, 'idCarrera'=>$idCarrera, 'idDocResolucion'=>$idDocResolucion));
   return $result;
}

function deleteMalla($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteMalla',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Documento

function createDocumento($documento,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDocumento',array('documento'=>$documento, 'descripcion'=>$descripcion));
   return $result;
}

function readDocumento($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocumento',array('id'=>$id));
   return $result;
}

function readDocumentoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocumentoAll',array());
   return $result;
}

function updateDocumento($id,$documento,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDocumento',array('id'=>$id, 'documento'=>$documento, 'descripcion'=>$descripcion));
   return $result;
}

function deleteDocumento($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDocumento',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Ocupacion

function createOcupacion($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createOcupacion',array('descripcion'=>$descripcion));
   return $result;
}

function readOcupacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readOcupacion',array('id'=>$id));
   return $result;
}

function readOcupacionAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readOcupacionAll',array());
   return $result;
}

function updateOcupacion($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateOcupacion',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteOcupacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteOcupacion',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD NivelTitulo

function createNivelTitulo($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createNivelTitulo',array('descripcion'=>$descripcion));
   return $result;
}

function readNivelTitulo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readNivelTitulo',array('id'=>$id));
   return $result;
}

function readNivelTituloAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readNivelTituloAll',array());
   return $result;
}

function updateNivelTitulo($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateNivelTitulo',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteNivelTitulo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteNivelTitulo',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Carrera

function createCarrera($resolucion,$nombre,$descripcion,$idModalidad){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createCarrera',array('resolucion'=>$resolucion, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'idModalidad'=>$idModalidad));
   return $result;
}

function readCarrera($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readCarrera',array('id'=>$id));
   return $result;
}

function readCarreraAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readCarreraAll',array());
   return $result;
}

function updateCarrera($id,$resolucion,$nombre,$descripcion,$idModalidad){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateCarrera',array('id'=>$id, 'resolucion'=>$resolucion, 'nombre'=>$nombre, 'descripcion'=>$descripcion, 'idModalidad'=>$idModalidad));
   return $result;
}

function deleteCarrera($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteCarrera',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Modalidad

function createModalidad($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createModalidad',array('descripcion'=>$descripcion));
   return $result;
}

function readModalidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readModalidad',array('id'=>$id));
   return $result;
}

function readModalidadAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readModalidadAll',array());
   return $result;
}

function updateModalidad($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateModalidad',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteModalidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteModalidad',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Enfermedad

function createEnfermedad($descripcion,$observaciones,$tratamiento){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEnfermedad',array('descripcion'=>$descripcion, 'observaciones'=>$observaciones, 'tratamiento'=>$tratamiento));
   return $result;
}

function readEnfermedad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEnfermedad',array('id'=>$id));
   return $result;
}

function readEnfermedadAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEnfermedadAll',array());
   return $result;
}

function updateEnfermedad($id,$descripcion,$observaciones,$tratamiento){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEnfermedad',array('id'=>$id, 'descripcion'=>$descripcion, 'observaciones'=>$observaciones, 'tratamiento'=>$tratamiento));
   return $result;
}

function deleteEnfermedad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEnfermedad',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD EstadoCivil

function createEstadoCivil($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEstadoCivil',array('descripcion'=>$descripcion));
   return $result;
}

function readEstadoCivil($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstadoCivil',array('id'=>$id));
   return $result;
}

function readEstadoCivilAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstadoCivilAll',array());
   return $result;
}

function updateEstadoCivil($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEstadoCivil',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteEstadoCivil($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEstadoCivil',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Hobbies

function createHobbies($idPersona,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createHobbies',array('idPersona'=>$idPersona, 'descripcion'=>$descripcion));
   return $result;
}

function readHobbies($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readHobbies',array('id'=>$id));
   return $result;
}

function readHobbiesAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readHobbiesAll',array());
   return $result;
}

function updateHobbies($id,$idPersona,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateHobbies',array('id'=>$id, 'idPersona'=>$idPersona, 'descripcion'=>$descripcion));
   return $result;
}

function deleteHobbies($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteHobbies',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Institucion

function createInstitucion($nombre,$idUbicacion,$tipo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createInstitucion',array('nombre'=>$nombre, 'idUbicacion'=>$idUbicacion, 'tipo'=>$tipo));
   return $result;
}

function readInstitucion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readInstitucion',array('id'=>$id));
   return $result;
}

function readInstitucionAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readInstitucionAll',array());
   return $result;
}

function updateInstitucion($id,$nombre,$idUbicacion,$tipo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateInstitucion',array('id'=>$id, 'nombre'=>$nombre, 'idUbicacion'=>$idUbicacion, 'tipo'=>$tipo));
   return $result;
}

function deleteInstitucion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteInstitucion',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Estado

function createEstado($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEstado',array('descripcion'=>$descripcion));
   return $result;
}

function readEstado($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstado',array('id'=>$id));
   return $result;
}

function readEstadoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstadoAll',array());
   return $result;
}

function updateEstado($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEstado',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteEstado($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEstado',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Discapacidad

function createDiscapacidad($idPersona,$idTipoDiscapacidad,$porcentaje){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDiscapacidad',array('idPersona'=>$idPersona, 'idTipoDiscapacidad'=>$idTipoDiscapacidad, 'porcentaje'=>$porcentaje));
   return $result;
}

function readDiscapacidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDiscapacidad',array('id'=>$id));
   return $result;
}

function readDiscapacidadAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDiscapacidadAll',array());
   return $result;
}

function updateDiscapacidad($id,$idPersona,$idTipoDiscapacidad,$porcentaje){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDiscapacidad',array('id'=>$id, 'idPersona'=>$idPersona, 'idTipoDiscapacidad'=>$idTipoDiscapacidad, 'porcentaje'=>$porcentaje));
   return $result;
}

function deleteDiscapacidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDiscapacidad',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD TipoDiscapacidad

function createTipoDiscapacidad($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createTipoDiscapacidad',array('descripcion'=>$descripcion));
   return $result;
}

function readTipoDiscapacidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoDiscapacidad',array('id'=>$id));
   return $result;
}

function readTipoDiscapacidadAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readTipoDiscapacidadAll',array());
   return $result;
}

function updateTipoDiscapacidad($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateTipoDiscapacidad',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteTipoDiscapacidad($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteTipoDiscapacidad',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Docente

function createDocente($idPersona,$fechaInicio,$idEstado){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDocente',array('idPersona'=>$idPersona, 'fechaInicio'=>$fechaInicio, 'idEstado'=>$idEstado));
   return $result;
}

function readDocente($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocente',array('id'=>$id));
   return $result;
}

function readDocenteAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocenteAll',array());
   return $result;
}

function updateDocente($id,$idPersona,$fechaInicio,$idEstado){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDocente',array('id'=>$id, 'idPersona'=>$idPersona, 'fechaInicio'=>$fechaInicio, 'idEstado'=>$idEstado));
   return $result;
}

function deleteDocente($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDocente',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD SolicitudMatricula

function createSolicitudMatricula($codigo,$fecha,$idPeriodoAcademico,$idPeriodoLectivo,$idEstadoSolicitud){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createSolicitudMatricula',array('codigo'=>$codigo, 'fecha'=>$fecha, 'idPeriodoAcademico'=>$idPeriodoAcademico, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idEstadoSolicitud'=>$idEstadoSolicitud));
   return $result;
}

function readSolicitudMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readSolicitudMatricula',array('id'=>$id));
   return $result;
}

function readSolicitudMatriculaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readSolicitudMatriculaAll',array());
   return $result;
}

function updateSolicitudMatricula($id,$codigo,$fecha,$idPeriodoAcademico,$idPeriodoLectivo,$idEstadoSolicitud){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateSolicitudMatricula',array('id'=>$id, 'codigo'=>$codigo, 'fecha'=>$fecha, 'idPeriodoAcademico'=>$idPeriodoAcademico, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idEstadoSolicitud'=>$idEstadoSolicitud));
   return $result;
}

function deleteSolicitudMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteSolicitudMatricula',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD AsignaturaSolicitudMatricula

function createAsignaturaSolicitudMatricula($idSolicitudMatricula,$idAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createAsignaturaSolicitudMatricula',array('idSolicitudMatricula'=>$idSolicitudMatricula, 'idAsignatura'=>$idAsignatura));
   return $result;
}

function readAsignaturaSolicitudMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsignaturaSolicitudMatricula',array('id'=>$id));
   return $result;
}

function readAsignaturaSolicitudMatriculaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsignaturaSolicitudMatriculaAll',array());
   return $result;
}

function updateAsignaturaSolicitudMatricula($id,$idSolicitudMatricula,$idAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateAsignaturaSolicitudMatricula',array('id'=>$id, 'idSolicitudMatricula'=>$idSolicitudMatricula, 'idAsignatura'=>$idAsignatura));
   return $result;
}

function deleteAsignaturaSolicitudMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteAsignaturaSolicitudMatricula',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD EstadoSolicitud

function createEstadoSolicitud($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createEstadoSolicitud',array('descripcion'=>$descripcion));
   return $result;
}

function readEstadoSolicitud($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstadoSolicitud',array('id'=>$id));
   return $result;
}

function readEstadoSolicitudAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readEstadoSolicitudAll',array());
   return $result;
}

function updateEstadoSolicitud($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateEstadoSolicitud',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteEstadoSolicitud($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteEstadoSolicitud',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD PeriodoLectivo

function createPeriodoLectivo($descripcion,$fechaInicio,$fechaFin){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createPeriodoLectivo',array('descripcion'=>$descripcion, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin));
   return $result;
}

function readPeriodoLectivo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPeriodoLectivo',array('id'=>$id));
   return $result;
}

function readPeriodoLectivoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPeriodoLectivoAll',array());
   return $result;
}

function updatePeriodoLectivo($id,$descripcion,$fechaInicio,$fechaFin){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updatePeriodoLectivo',array('id'=>$id, 'descripcion'=>$descripcion, 'fechaInicio'=>$fechaInicio, 'fechaFin'=>$fechaFin));
   return $result;
}

function deletePeriodoLectivo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deletePeriodoLectivo',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD PeriodoAcademico

function createPeriodoAcademico($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createPeriodoAcademico',array('descripcion'=>$descripcion));
   return $result;
}

function readPeriodoAcademico($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPeriodoAcademico',array('id'=>$id));
   return $result;
}

function readPeriodoAcademicoAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPeriodoAcademicoAll',array());
   return $result;
}

function updatePeriodoAcademico($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updatePeriodoAcademico',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deletePeriodoAcademico($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deletePeriodoAcademico',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Parcial

function createParcial($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createParcial',array('descripcion'=>$descripcion));
   return $result;
}

function readParcial($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readParcial',array('id'=>$id));
   return $result;
}

function readParcialAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readParcialAll',array());
   return $result;
}

function updateParcial($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateParcial',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteParcial($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteParcial',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Notas

function createNotas($idParcial,$idMatriculaAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createNotas',array('idParcial'=>$idParcial, 'idMatriculaAsignatura'=>$idMatriculaAsignatura));
   return $result;
}

function readNotas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readNotas',array('id'=>$id));
   return $result;
}

function readNotasAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readNotasAll',array());
   return $result;
}

function updateNotas($id,$idParcial,$idMatriculaAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateNotas',array('id'=>$id, 'idParcial'=>$idParcial, 'idMatriculaAsignatura'=>$idMatriculaAsignatura));
   return $result;
}

function deleteNotas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteNotas',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Ponderacion

function createPonderacion($idCategoria,$idParcial,$porcentaje){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createPonderacion',array('idCategoria'=>$idCategoria, 'idParcial'=>$idParcial, 'porcentaje'=>$porcentaje));
   return $result;
}

function readPonderacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPonderacion',array('id'=>$id));
   return $result;
}

function readPonderacionAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readPonderacionAll',array());
   return $result;
}

function updatePonderacion($id,$idCategoria,$idParcial,$porcentaje){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updatePonderacion',array('id'=>$id, 'idCategoria'=>$idCategoria, 'idParcial'=>$idParcial, 'porcentaje'=>$porcentaje));
   return $result;
}

function deletePonderacion($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deletePonderacion',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD DocenteAsignatura

function createDocenteAsignatura($idDocente,$idPeriodoLectivo,$idAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDocenteAsignatura',array('idDocente'=>$idDocente, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idAsignatura'=>$idAsignatura));
   return $result;
}

function readDocenteAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocenteAsignatura',array('id'=>$id));
   return $result;
}

function readDocenteAsignaturaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDocenteAsignaturaAll',array());
   return $result;
}

function updateDocenteAsignatura($id,$idDocente,$idPeriodoLectivo,$idAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDocenteAsignatura',array('id'=>$id, 'idDocente'=>$idDocente, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idAsignatura'=>$idAsignatura));
   return $result;
}

function deleteDocenteAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDocenteAsignatura',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD AulasAsignaturas

function createAulasAsignaturas($idAula,$idDocenteAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createAulasAsignaturas',array('idAula'=>$idAula, 'idDocenteAsignatura'=>$idDocenteAsignatura));
   return $result;
}

function readAulasAsignaturas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAulasAsignaturas',array('id'=>$id));
   return $result;
}

function readAulasAsignaturasAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAulasAsignaturasAll',array());
   return $result;
}

function updateAulasAsignaturas($id,$idAula,$idDocenteAsignatura){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateAulasAsignaturas',array('id'=>$id, 'idAula'=>$idAula, 'idDocenteAsignatura'=>$idDocenteAsignatura));
   return $result;
}

function deleteAulasAsignaturas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteAulasAsignaturas',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD CategoriaNota

function createCategoriaNota($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createCategoriaNota',array('descripcion'=>$descripcion));
   return $result;
}

function readCategoriaNota($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readCategoriaNota',array('id'=>$id));
   return $result;
}

function readCategoriaNotaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readCategoriaNotaAll',array());
   return $result;
}

function updateCategoriaNota($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateCategoriaNota',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteCategoriaNota($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteCategoriaNota',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD DetalleNotas

function createDetalleNotas($descripcion,$nota,$idCateogiraNota,$idNota){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createDetalleNotas',array('descripcion'=>$descripcion, 'nota'=>$nota, 'idCateogiraNota'=>$idCateogiraNota, 'idNota'=>$idNota));
   return $result;
}

function readDetalleNotas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDetalleNotas',array('id'=>$id));
   return $result;
}

function readDetalleNotasAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readDetalleNotasAll',array());
   return $result;
}

function updateDetalleNotas($id,$descripcion,$nota,$idCateogiraNota,$idNota){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateDetalleNotas',array('id'=>$id, 'descripcion'=>$descripcion, 'nota'=>$nota, 'idCateogiraNota'=>$idCateogiraNota, 'idNota'=>$idNota));
   return $result;
}

function deleteDetalleNotas($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteDetalleNotas',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD MatriculaAsignatura

function createMatriculaAsignatura($idMatricula,$idAsignatura,$numeroMatricula,$idParalelo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createMatriculaAsignatura',array('idMatricula'=>$idMatricula, 'idAsignatura'=>$idAsignatura, 'numeroMatricula'=>$numeroMatricula, 'idParalelo'=>$idParalelo));
   return $result;
}

function readMatriculaAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMatriculaAsignatura',array('id'=>$id));
   return $result;
}

function readMatriculaAsignaturaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMatriculaAsignaturaAll',array());
   return $result;
}

function updateMatriculaAsignatura($id,$idMatricula,$idAsignatura,$numeroMatricula,$idParalelo){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateMatriculaAsignatura',array('id'=>$id, 'idMatricula'=>$idMatricula, 'idAsignatura'=>$idAsignatura, 'numeroMatricula'=>$numeroMatricula, 'idParalelo'=>$idParalelo));
   return $result;
}

function deleteMatriculaAsignatura($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteMatriculaAsignatura',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Paralelo

function createParalelo($descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createParalelo',array('descripcion'=>$descripcion));
   return $result;
}

function readParalelo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readParalelo',array('id'=>$id));
   return $result;
}

function readParaleloAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readParaleloAll',array());
   return $result;
}

function updateParalelo($id,$descripcion){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateParalelo',array('id'=>$id, 'descripcion'=>$descripcion));
   return $result;
}

function deleteParalelo($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteParalelo',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Matricula

function createMatricula($codigo,$idEstudiante,$idPeriodoLectivo,$idJornada,$idMalla,$idTipoMatricula){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createMatricula',array('codigo'=>$codigo, 'idEstudiante'=>$idEstudiante, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idJornada'=>$idJornada, 'idMalla'=>$idMalla, 'idTipoMatricula'=>$idTipoMatricula));
   return $result;
}

function readMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMatricula',array('id'=>$id));
   return $result;
}

function readMatriculaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readMatriculaAll',array());
   return $result;
}

function updateMatricula($id,$codigo,$idEstudiante,$idPeriodoLectivo,$idJornada,$idMalla,$idTipoMatricula){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateMatricula',array('id'=>$id, 'codigo'=>$codigo, 'idEstudiante'=>$idEstudiante, 'idPeriodoLectivo'=>$idPeriodoLectivo, 'idJornada'=>$idJornada, 'idMalla'=>$idMalla, 'idTipoMatricula'=>$idTipoMatricula));
   return $result;
}

function deleteMatricula($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteMatricula',array('id'=>$id));
   return $result;
}

// FUNCIONES CRUD Asistencia

function createAsistencia($idMatriculaAsignatura,$fecha,$horas){
   $client = new nusoap_client(WSDL);
   $result=$client->call('createAsistencia',array('idMatriculaAsignatura'=>$idMatriculaAsignatura, 'fecha'=>$fecha, 'horas'=>$horas));
   return $result;
}

function readAsistencia($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsistencia',array('id'=>$id));
   return $result;
}

function readAsistenciaAll(){
   $client = new nusoap_client(WSDL);
   $result=$client->call('readAsistenciaAll',array());
   return $result;
}

function updateAsistencia($id,$idMatriculaAsignatura,$fecha,$horas){
   $client = new nusoap_client(WSDL);
   $result=$client->call('updateAsistencia',array('id'=>$id, 'idMatriculaAsignatura'=>$idMatriculaAsignatura, 'fecha'=>$fecha, 'horas'=>$horas));
   return $result;
}

function deleteAsistencia($id){
   $client = new nusoap_client(WSDL);
   $result=$client->call('deleteAsistencia',array('id'=>$id));
   return $result;
}

?>