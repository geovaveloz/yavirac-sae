$(document).ready(function () {   $( "#borrar" ).prop( "disabled", true );   var Malla = $("#Malla").kendoDropDownList({       dataTextField: "descripcion",       dataValueField: "id",       filter: "contains",       change: seleccionado,       optionLabel: "Nuevo",       suggest: true,       dataSource: {          transport: {             read: {                url: "../../scripts/php/get/getMalla.php",                dataType: "json",             }          }       }   });});function seleccionado(){   if ($("#Malla").val()>0){      $("#borrar").prop( "disabled", false );      document.getElementById("guardar").value="ACTUALIZAR";      showData();   }else{      $("#borrar").prop( "disabled", true );      document.getElementById("guardar").value="GUARDAR";      document.getElementById("fechaMallaInicio").value="";      document.getElementById("fechaMallaFin").value="";      document.getElementById("idCarrera").value="";      document.getElementById("idDocResolucion").value="";   }}function showData(request, response){   var xmlhttp = new XMLHttpRequest();   xmlhttp.onreadystatechange = function() {      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {         var result = JSON.parse(xmlhttp.responseText);         $.each(result, function (key, value) {            document.getElementById("fechaMallaInicio").value=value.fechaMallaInicio;            document.getElementById("fechaMallaFin").value=value.fechaMallaFin;            document.getElementById("idCarrera").value=value.idCarrera;            document.getElementById("idDocResolucion").value=value.idDocResolucion;         });      }   };   xmlhttp.open("GET", "../../scripts/php/get/getMalla.php?malla="+$("#Malla").val(), true);   xmlhttp.send();};
