$(document).ready(function () {   $( "#borrar" ).prop( "disabled", true );   var Notas = $("#Notas").kendoDropDownList({       dataTextField: "descripcion",       dataValueField: "id",       filter: "contains",       change: seleccionado,       optionLabel: "Nuevo",       suggest: true,       dataSource: {          transport: {             read: {                url: "../../scripts/php/get/getNotas.php",                dataType: "json",             }          }       }   });});function seleccionado(){   if ($("#Notas").val()>0){      $("#borrar").prop( "disabled", false );      document.getElementById("guardar").value="ACTUALIZAR";      showData();   }else{      $("#borrar").prop( "disabled", true );      document.getElementById("guardar").value="GUARDAR";      document.getElementById("idParcial").value="";      document.getElementById("idMatriculaAsignatura").value="";   }}function showData(request, response){   var xmlhttp = new XMLHttpRequest();   xmlhttp.onreadystatechange = function() {      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {         var result = JSON.parse(xmlhttp.responseText);         $.each(result, function (key, value) {            document.getElementById("idParcial").value=value.idParcial;            document.getElementById("idMatriculaAsignatura").value=value.idMatriculaAsignatura;         });      }   };   xmlhttp.open("GET", "../../scripts/php/get/getNotas.php?notas="+$("#Notas").val(), true);   xmlhttp.send();};
