$(document).ready(function () {   $( "#borrar" ).prop( "disabled", true );   var Documento = $("#Documento").kendoDropDownList({       dataTextField: "descripcion",       dataValueField: "id",       filter: "contains",       change: seleccionado,       optionLabel: "Nuevo",       suggest: true,       dataSource: {          transport: {             read: {                url: "../../scripts/php/get/getDocumento.php",                dataType: "json",             }          }       }   });});function seleccionado(){   if ($("#Documento").val()>0){      $("#borrar").prop( "disabled", false );      document.getElementById("guardar").value="ACTUALIZAR";      showData();   }else{      $("#borrar").prop( "disabled", true );      document.getElementById("guardar").value="GUARDAR";      document.getElementById("documento").value="";      document.getElementById("descripcion").value="";   }}function showData(request, response){   var xmlhttp = new XMLHttpRequest();   xmlhttp.onreadystatechange = function() {      if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {         var result = JSON.parse(xmlhttp.responseText);         $.each(result, function (key, value) {            document.getElementById("documento").value=value.documento;            document.getElementById("descripcion").value=value.descripcion;         });      }   };   xmlhttp.open("GET", "../../scripts/php/get/getDocumento.php?documento="+$("#Documento").val(), true);   xmlhttp.send();};
