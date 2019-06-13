<?php
include 'templates/header.php';
?>

    <main class="container">
        <h1>Alta de Destinos</h1>

        <form action="agregarDestino.php" method="post">Destino a Ingresar :
            <br>
            <input type="text" name="destNombre" class="form-control">
            <br>
            Region
            <br>
            <br>
            <select name="regID">
                <option value="1">America del Sur</option>
                <option value="2">America Central</option>
                <option value="3">Caribe y Mexico</option>
                <option value="4">America del Norte</option>
                <option value="5">Europa Occidental</option>
                <option value="6">Europa del Este</option>
                <option value="7">Asia</option>
                <option value="8">Oceania</option>
            </select>
            <br>
            <br>
            Precio
            <input type="text" name="destPrecio" class="form-control">
            <br>
            Asientos Disponibles
            <input type="text" name="destAsientos" class="form-control">
            <br>
            Tickets Disponibles
            <input type="text" name="destDisponibles" class="form-control">
            <br>
            Destino Activo
            <select name="destActivos">
                <option value="0">Inactivo</option>
                <option value="1">Activo</option>
            </select>
            <br>
            <br>
            <input type="submit" value="Agregar Region" class="btn btn-secondary">
            <a href="adminRegiones.php" class=btn btn-light>Volver a panel de Regiones</a>
        </form>


<?php
include 'templates/footer.php';
?>