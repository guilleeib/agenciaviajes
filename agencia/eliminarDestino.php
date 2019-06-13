<?php
require 'clases/Conexion.php';
require 'clases/destino.php';
$objDestino = new destino();
$eliminarDestino = $objDestino->eliminarDestino();

include 'templates/header.php';
?>

    <main class="container">
        <script>
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Region Eliminada con Exito',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
        <h1>Eliminar Destinos</h1>
        <?php


        if($eliminarDestino){}
        ?>

        <div class="alert alert-succes">Region modificada con Exito<a href="adminDestinos.php" class="btn btn-light"> Volver a panel </a>
        </div>

    </main>



<?php  include 'templates/footer.php';  ?>