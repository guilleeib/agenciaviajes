<?php
    include 'templates/header.php';
?>

    <main class="container">
        <h1>Alta de Regiones</h1>

        <form action="AgregarRegiones.php" method="post">Region a Ingresar:
            <br>
            <input type="text" name="regNombre" class="form-control">
            <br>
            <input type="submit" value="Agregar Region" class="btn btn-secondary">
            <a href="adminRegiones.php" class=btn btn-light>Volver a panel de Regiones</a>
        </form>


<?php
    include 'templates/footer.php';
?>