$(document).ready(function () {   $( "#borrar" ).prop( "disabled", true );   var AulasAsignaturas = $("#AulasAsignaturas").kendoDropDownList({       dataTextField: "descripcion",       dataValueField: "id",       filter: "contains",       change: seleccionado,       optionLabel: "Nuevo",       suggest: true,       dataSource: {          transport: {             read: {                url: "../../scripts/php/get/getAulasAsignaturas.php",                dataType: "json",             }          }       }   });});function seleccionado(){   if ($("#AulasAsignaturas").val()>0){      $("#borrar").prop( "disabled", false );      document.getElementById("guardar").value="ACTUALIZAR";      showData();   }else{      $("#borrar").prop( "disabled", true );      document.getElementById("guardar").value="GUARDAR";      document.getElementById("idAula").value="";      document.getElementById("idDocenteAsignatura").value="";   }}function showData(request, response){   var xmlhttp = new XMLHttpRequest();   xmlhttp.onreadystatechange = function() {      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {         var result = JSON.parse(xmlhttp.responseText);         $.each(result, function (key, value) {            document.getElementById("idAula").value=value.idAula;            document.getElementById("idDocenteAsignatura").value=value.idDocenteAsignatura;         });      }   };   xmlhttp.open("GET", "../../scripts/php/get/getAulasAsignaturas.php?aulasasignaturas="+$("#AulasAsignaturas").val(), true);   xmlhttp.send();};
