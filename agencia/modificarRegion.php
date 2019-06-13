<?php require 'clases/Conexion.php';?>
<?php require 'clases/Region.php';?>
<?php include 'templates/header.php'; ?>
<?php    $objRegion = new Region();
    $modificarRegiones = $objRegion->modificarRegion();
    ?>

    <main class="container">
        <h1>Modificar Regiones</h1>
        <?php


        if($modificarRegiones){}
        ?>
        <div class="alert alert-succes">Region modificada con Exito<a href="adminRegiones.php" class="btn btn-light"> Volver a panel </a>
        </div>
    <main class="container">
        <script>
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Region Modificada con Exito',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    </main>

<?php  include 'templates/footer.php';  ?>