<?php
require 'clases/Conexion.php';
require 'clases/destino.php';
$objDestino = new destino();
$verID = $objDestino->verDestinoPorID();

include 'templates/header.php';
?>
    <main class="container">
    <h1>Eliminar Regiones</h1>

    <form action="eliminarDestino.php" method="post">Region a eliminar:
        <input type="hidden" name="destID" value="<?php echo $verID['destID']; ?>">

        <br>
        <input type="text" name="destNombre" value="<?php echo $verID['destNombre'];?>" class="form-control">
        <br>
        <input type="submit" value="Eliminar" class="btn btn-secondary">
        <a href="adminDestino.php" class=btn btn-light>Volver a panel de Regiones</a>
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
                window.location = 'adminDestino.php'
            }
        })
    </script>



<?php
include 'templates/footer.php';
?>