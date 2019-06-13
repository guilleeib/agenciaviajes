<?php require 'clases/Conexion.php';?>
<?php require 'clases/destino.php';?>
<?php include 'templates/header.php'; ?>
<?php    $objDestino = new destino();
$modificarDestinos = $objDestino->modificarDestino();
?>

    <main class="container">
    <h1>Modificar Regiones</h1>
    <?php


    if($modificarDestinos){}
    ?>
    <div class="alert alert-succes">Destino modificado con Exito<a href="adminDestinos.php" class="btn btn-light"> Volver a panel </a>
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