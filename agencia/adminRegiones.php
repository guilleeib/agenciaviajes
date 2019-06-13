<?php
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $objRegion = new Region();
    $listaRegiones = $objRegion->listarRegiones();

    include 'templates/header.php';
?>

    <section class="container">
        <h1>Panel de administración de regiones</h1>
<?php

?>

        <table class="table table-stripped table-hover table-border">
            <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th colspan="2">
                    <a href="formAgregarRegiones.php" class="btn btn-dark">
                        Agregar
                    </a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ( $listaRegiones as $region ){
                ?>
                <tr>

                    <td><?php echo $region['regNombre']; ?></td>
                    <td>
                        <a href="formModificarRegion.php?regID=<?php echo $region['regID']; ?>" class="btn btn-outline-secondary">
                            modificar
                        </a>
                    </td>
                    <td>
                        <a href="formEliminarRegion.php?regID=<?php echo $region['regID'] ?>" class="btn btn-outline-secondary">
                            eliminar
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </section>

<?php
    include 'templates/footer.php';
?>