$(document).ready(function () {
    swal(
        'Bienvenido',
        'Se recomienda la actualización de los datos en su perfil',
        'info'
    );
    var carreras = $("#carreras").kendoDropDownList({
        dataTextField: "nombre",
        dataValueField: "id",
        filter: "contains",
        change: seleccionado,
        optionLabel: "Nuevo",
        suggest: true,
        dataSource: {
            transport: {
                read: {
                    url: "../../scripts/php/get/getCarrera.php",
                    dataType: "json",
                }
            }
        }
    });

    document.getElementById("AsignaturasMatriculables").style.display = "none";
});

function  seleccionado() {    
    document.getElementById("AsignaturasMatriculables").style.display = "block";
    var asignaturas = $("#grid").kendoGrid({
        dataSource: {
            pageSize: 10,
            transport: {
                read:  {
                    url: "../../scripts/php/get/getAsignaturasMatriculables.php?nivel=1&carrera="+$("#carreras").val(),
                    dataType: "json"
                }
            }
        },
        pageable: true,
        scrollable: false,
        persistSelection: true,
        change: onChange,
        columns: [
            { selectable: true , width: "50px"},
            { field:"codigo", title: "Código" },
            { field: "nombre", title:"Asignatura", format: "{0:c}"},
            { field: "nivel", title:"Periodo Académico"},
            { field: "horas", title:"Horas"}]
    });
}

function onChange(arg) {
    kendoConsole.log("The selected product ids are: [" + this.selectedKeyNames().join(", ") + "]");
}

function visualizarSolicitud(){
    alert("se supone que debe verse la solicitud");
}

function cancelarSolicitud(){
    alert("se supone que debe cancelar la solicitud");
}