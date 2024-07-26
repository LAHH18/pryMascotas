<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> 
    
    <style>    
       table.dataTable thead, table.dataTable tfoot {
           background-color: #28a745;                  
       }
       .table thead th, .table tfoot th{ 
           color: #f8f9fa;
        }
    </style>
  </head>
  <body>
  
<div class="container mt-4">
    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">CRUD MASCOTAS</h4>
    </div>
    <table id="example" class="table table-striped table-hover" style="width:100%">
        <thead>
            <tr>
                <th class="text-dark">ID</th>
                <th class="text-dark">URL</th>
                <th class="text-dark">NOMBRE</th>
                <th class="text-dark">ESTATUS</th>
                <th class="text-dark">ACCION</th>
            </tr>
        </thead>
        <tbody>

            <?php
            require_once "./app/views/inc/head.php";
            require_once "./config/server.php";
            use app\controllers\petController;
            
            $cpropiedad = new petController();
            $Consulta = $cpropiedad->consultaMascota();

            foreach($Consulta as $dato){
                echo '<tr>';
                echo '<td>'. $dato["id_mascota"] .'</td>';
                echo '<td><img src="'. $dato["url_img"] .'" alt=""></td>';
                echo '<td>'. $dato["nombre"] .'</td>';
                echo '<td>'. $dato["fkraza"] .'</td>';
                echo '<td>
                    <a href="#" class="btn btn-warning">Actualizar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>URL</th>
                <th>NOMBRE</th>
                <th>ESTATUS</th>
                <th>ACCION</th>
            </tr>
        </tfoot>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable({
        lengthMenu: [[2, 4, 8, 10], [2, 4, 8, 10]],
        language: {
            "decimal": "",
            "emptyTable": "No hay datos disponibles en la tabla",
            "info": "Mostrando START a END de TOTAL entradas",
            "infoEmpty": "Mostrando 0 a 0 de 0 entradas",
            "infoFiltered": "(filtrado de MAX entradas totales)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar MENU entradas",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron registros coincidentes",
            "paginate": {
                "first": "Primero",
                "last": "Último",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": activar para ordenar la columna de manera ascendente",
                "sortDescending": ": activar para ordenar la columna de manera descendente"
            }
        }
    });
  });
</script>

</body>
</html>
