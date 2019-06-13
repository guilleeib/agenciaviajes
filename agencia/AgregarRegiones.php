<?php require 'clases/Conexion.php';?>
<?php require 'clases/Region.php';?>
<?php include 'templates/header.php'; ?>
<?php    $objRegion = new Region();
    $agregarRegiones = $objRegion->agregarRegion();
    ?>

    <main class="container">
        <h1>Agregar Regiones</h1>
        <?php

        if($agregarRegiones){}
        ?>
        <div class="alert alert-succes">Region agregada con Exito<a href="adminRegiones.php" class="btn btn-light"> Volver a panel </a>
        </div>
    <main class="container">
        <script>
            Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Region Agregada con Exito',
                showConfirmButton: false,
                timer: 1500
            })
        </script>
    </main>

<?php  include 'templates/footer.php';  ?>