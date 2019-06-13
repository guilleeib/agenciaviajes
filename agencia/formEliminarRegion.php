<?php
require 'clases/Conexion.php';
require 'clases/Region.php';
$objRegion = new Region();
$verID = $objRegion->verRegionPorID();

include 'templates/header.php';
?>
    <main class="container">
    <h1>Eliminar Regiones</h1>

    <form action="eliminarRegion.php" method="post">Region a eliminar:
        <input type="hidden" name="regID" value="<?php echo $verID['regID']; ?>">

        <br>
        <input type="text" name="regNombre" value="<?php echo $verID['regNombre'];?>" class="form-control">
        <br>
        <input type="submit" value="Eliminar" class="btn btn-secondary">
        <a href="adminRegiones.php" class=btn btn-light>Volver a panel de Regiones</a>
    </form>

    <script>
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (!result.value) {
                window.location = 'adminRegiones.php'
            }
        })
    </script>



<?php
include 'templates/footer.php';
?>