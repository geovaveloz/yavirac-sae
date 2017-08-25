$(document).ready(function () {
   $( "#borrar" ).prop( "disabled", true );
   var Persona = $("#Persona").kendoDropDownList({
       dataTextField: "descripcion",
       dataValueField: "id",
       filter: "contains",
       change: seleccionado,
       optionLabel: "Nuevo",
       suggest: true,
       dataSource: {
          transport: {
             read: {
                url: "../../scripts/php/get/getPersona.php",
                dataType: "json",
             }
          }
       }
   });
   var fechaNacimiento = $("#fechaNacimiento").kendoDatePicker({ });
   var genero = $("#idGenero").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getGenero.php",
                    dataType: "json",
                }
            }
        }
    });
    var estadoCivil = $("#idEstadoCivil").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getEstadoCivil.php",
                    dataType: "json",
                }
            }
        }
    });
    var tipoSangre = $("#idTipoSangre").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getTipoSangre.php",
                    dataType: "json",
                }
            }
        }
    });
    var ocupacion = $("#idOcupacion").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getOcupacion.php",
                    dataType: "json",
                }
            }
        }
    });
    var lugarDomicilio = $("#idDomicilio").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getUbicacion.php",
                    dataType: "json",
                }
            }
        }
    });
    var lugarNacimiento = $("#idUbicacionNacimiento").kendoDropDownList({
        dataTextField: "descripcion",
        dataValueField: "id",
        filter: "contains",
        suggest: true,
        dataSource: {
        transport: {
                read: {
                    url: "../../scripts/php/get/getUbicacion.php",
                    dataType: "json",
                }
            }
        }
    });
});

function seleccionado(){
   if ($("#Persona").val()>0){
      $("#borrar").prop( "disabled", false );
      document.getElementById("guardar").value="ACTUALIZAR";
      showData();
   }else{
      $("#borrar").prop( "disabled", true );
      document.getElementById("guardar").value="GUARDAR";
      document.getElementById("identificacion").value="";
      document.getElementById("nombre1").value="";
      document.getElementById("nombre2").value="";
      document.getElementById("apellido1").value="";
      document.getElementById("apellido2").value="";
      document.getElementById("fechaNacimiento").value="";
      document.getElementById("idGenero").value="";
      document.getElementById("idDomicilio").value="";
      document.getElementById("idEstadoCivil").value="";
      document.getElementById("idUbicacionNacimiento").value="";
      document.getElementById("ingresos").value="";
      document.getElementById("idTipoSangre").value="";
      document.getElementById("numeroHijos").value="";
      document.getElementById("idOcupacion").value="";
      document.getElementById("foto").value="";
   }
}

function showData(request, response){
   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
         var result = JSON.parse(xmlhttp.responseText);
         $.each(result, function (key, value) {
            document.getElementById("identificacion").value=value.identificacion;
            document.getElementById("nombre1").value=value.nombre1;
            document.getElementById("nombre2").value=value.nombre2;
            document.getElementById("apellido1").value=value.apellido1;
            document.getElementById("apellido2").value=value.apellido2;
            document.getElementById("fechaNacimiento").value=value.fechaNacimiento;
            document.getElementById("idGenero").value=value.idGenero;
            document.getElementById("idDomicilio").value=value.idDomicilio;
            document.getElementById("idEstadoCivil").value=value.idEstadoCivil;
            document.getElementById("idUbicacionNacimiento").value=value.idUbicacionNacimiento;
            document.getElementById("ingresos").value=value.ingresos;
            document.getElementById("idTipoSangre").value=value.idTipoSangre;
            document.getElementById("numeroHijos").value=value.numeroHijos;
            document.getElementById("idOcupacion").value=value.idOcupacion;
            document.getElementById("foto").value=value.foto;
         });
      }
   };
   xmlhttp.open("GET", "../../scripts/php/get/getPersona.php?persona="+$("#Persona").val(), true);
   xmlhttp.send();
};
