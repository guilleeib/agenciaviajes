<?php
require 'clases/Conexion.php';
require 'clases/Region.php';
$objRegion = new Region();
$verID = $objRegion->verRegionPorID();

include 'templates/header.php';
?>
    <main class="container">
        <h1>Modificar Regiones</h1>

        <form action="modificarRegion.php" method="post">Region a Modificar:
            <br>
            <input type="text" name="regNombre" value="<?php echo $verID['regNombre'];?>" class="form-control">
            <br>
            <input type="submit" value="Modificar" class="btn btn-secondary">
            <a href="adminRegiones.php" class=btn btn-light>Volver a panel de Regiones</a>
        </form>


<?php
    include 'templates/footer.php';
?>