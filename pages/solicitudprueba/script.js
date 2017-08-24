$(document).ready(function () {
   /* swal(
        'Bienvenido',
        'El proceso de matrícula consta de 4 pasos, el sistema le va a guiar.',
        'info'
    );*/
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
});

function  seleccionado() {    
    var asignaturas = $("#grid").kendoGrid({
        dataSource: {
            pageSize: 10,
            transport: {
                read:  {
                    url: "../../scripts/php/get/getAsignaturasMatriculables.php?nivel=1&carrera="+$("#carreras").val(),
                    dataType: "json"
                }
            },
            schema: {
                model: {
                    id: "id"
                }
            }
        },
        pageable: true,
        scrollable: false,
        persistSelection: true,
        sortable: true,
        change: onChange,
        columns: [
            { selectable: true, width: "50px" },
            { field:"codigo", title: "Código" },
            { field: "nombre", title:"Asignatura", format: "{0:c}"},
            { field: "nivel", title:"Periodo Académico"},
            { field: "horasPractica", title:"Horas"}]
    });
}

function onChange(arg) {
    kendoConsole.log("The selected product ids are: [" + this.selectedKeyNames().join(", ") + "]");
}