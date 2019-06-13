<?php require 'clases/Conexion.php';?>
<?php require 'clases/destino.php';?>
<?php include 'templates/header.php'; ?>
<?php    $objDestino = new Destino();
$agregarDestino = $objDestino->agregarDestino();
?>

    <main class="container">
    <h1>Agregar Destinos</h1>
    <?php

    if($agregarDestino){}
    ?>
    <div class="alert alert-succes">Destino agregado con Exito<a href="adminDestinos.php" class="btn btn-light"> Volver a panel </a>
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