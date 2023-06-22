<?php

use Models\Country;

$objCountry = new Country();
// Recargar la página actual
global $idCountry;
function setIdCountry($id)
{
    $idCountry = $id;
}
?>
<script src="js/Bootstrap/bootstrap.min.js"></script>
<section>
    <h1>Listado de Paises</h1>
    <div class="container">
        <table id="misPaises" class="display dataTable">
            <thead>
                <tr>
                    <th class="sorting_disabled" rowspan="1" colspan="1">Id pais</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1">Nombre del pais</th>
                    <th rowspan="1" colspan="1"></th>
            </thead>
            <tbody>
                <?php foreach ($objCountry->loadAllData() as $pais) : ?>
                    <tr>
                        <td><?php echo $pais['id_country']; ?></td>
                        <td><?php echo $pais['name_country']; ?></td>
                        <!-- <td><a href="controllers/Country/delete_data.php?id=<?php echo $pais['id_country']; ?>" class="btn btn-danger">-</button></td> -->
                        <td><button type="button" class="btn btn-danger btn-abrir-modal">-</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>
<div class="modal fade " id="verifdel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-l">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <h5 class="card-header">Confirmacion de eliminacion</h5>
                    <div class="card-body">
                        <h3></h3>
                        <div id="info"></div>
                        <button type="button" class="btn btn-danger borrardef" onclick="borrarDataDb()" data-bs-dismiss="modal">Confirmar eliminacion</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-3.7.0.slim.js"></script>
<script src="js/DataTables/datatables.min.js"></script>
<script>
    var row;
    let idCountryBorrar;
    $('#miTabla').DataTable().destroy();
    $(document).ready(function() {
        var tabla = $('#misPaises').DataTable();

        // Evento click en los botones dentro de la tabla
        $('#misPaises tbody').on('click', '.btn-abrir-modal', function() {
            row = tabla.row($(this).parents('tr'));
            var fila = tabla.row($(this).closest('tr')).data();
            idCountryBorrar = fila[0]; // Obtener el valor de la columna 'Nombre'

            // Abrir el modal y mostrar el nombre del usuario
            abrirModal(fila[0],fila[1]);


        });
    });

    function abrirModal(idpk,info) {
        // Personaliza la lógica para abrir el modal y mostrar el nombre del usuario
        // Puedes utilizar jQuery o JavaScript puro para abrir el modal y establecer el contenido
        // Aquí tienes un ejemplo utilizando jQuery:
        $('#verifdel').modal('show');
        document.querySelector('#info').innerHTML= 'Desea eliminar a: <b>'+info+'</b> con Id'+idpk;
    }

    function borrarDataDb() {
        fetch('controllers/Country/delete_data.php?id=' + idCountryBorrar, {
                method: 'DELETE'
            })
            .then(response => {
                row.remove().draw();
            })
            .catch(error => {
                console.log('Error en la petición DELETE:', error);
            });
        
    }
    $('#misPaises').DataTable({

        pageLength: 4,
        lengthMenu: [3, 5, 10, 25, 50, 100],
        language: {

            "decimal": "",
            "emptyTable": "No hay datos en la tabla",
            "info": "Desde _START_ a _END_ de _TOTAL_ registros",
            "infoEmpty": "Mostrando 0 a 0 de 0 Registros",
            "infoFiltered": "(filtered from _MAX_ total entries)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrando _MENU_ registros",
            "loadingRecords": "Loading...",
            "processing": "",
            "search": "Buscar:",
            "zeroRecords": "Nose encontraron registros",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": activate to sort column ascending",
                "sortDescending": ": activate to sort column descending"
            }

        },
    })
</script>