$(document).ready(function () {   $( "#borrar" ).prop( "disabled", true );   var Titulo = $("#Titulo").kendoDropDownList({       dataTextField: "descripcion",       dataValueField: "id",       filter: "contains",       change: seleccionado,       optionLabel: "Nuevo",       suggest: true,       dataSource: {          transport: {             read: {                url: "../../scripts/php/get/getTitulo.php",                dataType: "json",             }          }       }   });});function seleccionado(){   if ($("#Titulo").val()>0){      $("#borrar").prop( "disabled", false );      document.getElementById("guardar").value="ACTUALIZAR";      showData();   }else{      $("#borrar").prop( "disabled", true );      document.getElementById("guardar").value="GUARDAR";      document.getElementById("idPersona").value="";      document.getElementById("idInstitucion").value="";      document.getElementById("codigoRegistro").value="";      document.getElementById("idNivelTitulo").value="";   }}function showData(request, response){   var xmlhttp = new XMLHttpRequest();   xmlhttp.onreadystatechange = function() {      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {         var result = JSON.parse(xmlhttp.responseText);         $.each(result, function (key, value) {            document.getElementById("idPersona").value=value.idPersona;            document.getElementById("idInstitucion").value=value.idInstitucion;            document.getElementById("codigoRegistro").value=value.codigoRegistro;            document.getElementById("idNivelTitulo").value=value.idNivelTitulo;         });      }   };   xmlhttp.open("GET", "../../scripts/php/get/getTitulo.php?titulo="+$("#Titulo").val(), true);   xmlhttp.send();};
