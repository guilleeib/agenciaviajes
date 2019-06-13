<?php

require 'clases/Conexion.php';
require 'clases/destino.php';
$objDestino = new destino();
$verID = $objDestino->verDestinoPorID();

include 'templates/header.php';
?>


    <main class="container">
        <h1>Modificar Destinos</h1>

        <form action="modificarDestino.php" method="post">Destino a Modificar :
            <input type="hidden" name="destID" value="<?php echo $verID['destID'];?>">
            <br>
            <input type="text" name="destNombre" value="<?php echo $verID['destNombre'];?>" class="form-control">
            <br>
            Region
            <br>
            <input type="text" name="regID" value="<?php echo $verID['regID'];?>" class="form-control">

            <br>
            Precio
            <input type="text" name="destPrecio" value=<?php echo $verID['destPrecio'];?>" class="form-control">
            <br>
            Asientos Disponibles
            <input type="text" name="destAsientos" value="<?php echo $verID['destAsientos'];?>" class="form-control">
            <br>
            Tickets Disponibles
            <input type="text" name="destDisponibles" value="<?php echo $verID['destDisponibles'];?>" class="form-control">
            <br>
            Destino Activo
            <input type="text" name="destActivo" value="<?php echo $verID['destActivo'];?>" class="form-control">
            <br>
            <br>
            <input type="submit" value="Modificar" class="btn btn-secondary">
            <a href="adminRegiones.php" class=btn btn-light>Volver a panel de Regiones</a>
        </form>
<?php
    include 'templates/footer.php';
?>