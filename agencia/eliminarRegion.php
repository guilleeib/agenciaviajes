<?php require 'clases/Conexion.php';?>
<?php require 'clases/Region.php';?>
<?php include 'templates/header.php'; ?>
<?php    $objRegion = new Region();
$eliminarRegion = $objRegion->eliminarRegion();
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
        <h1>Eliminar Regiones</h1>
        <?php


        if($eliminarRegion){}
        ?>

        <div class="alert alert-succes">Region modificada con Exito<a href="adminRegiones.php" class="btn btn-light"> Volver a panel </a>
        </div>

    </main>



<?php  include 'templates/footer.php';  ?>