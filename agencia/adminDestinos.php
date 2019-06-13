<?php
require 'clases/Conexion.php';
require 'clases/destino.php';
$objDestino = new destino();
$listaDestinos = $objDestino->listarDestinos();

include 'templates/header.php';
?>

    <section class="container">
        <h1>Panel de Administracion de Destinos</h1>
    </section>

    <table class="table table-stripped table-hover table-border">
        <thead class="thead-dark">
        <tr>
            <th>Destino</th>
            <th>RegID</th>
            <th>Precio</th>
            <th>Asientos Disponibles</th>
            <th>Destinos Disponibles</th>
            <th>Destino Activo</th>
            <th colspan="2">
                <a href="formAgregarDestino.php" class="btn btn-dark">
                    Agregar
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ( $listaDestinos as $destino ){
            ?>
            <tr>

                <td><?php echo $destino['destNombre']; ?>
                <td><?php echo $destino['regID']; ?></td>
                <td><?php echo $destino['destPrecio']; ?></td>
                <td><?php echo $destino['destAsientos']; ?></td>
                <td><?php echo $destino['destDisponibles'];?></td>
                <td><?php echo $destino['destActivo'];?></td>
                <td>
                    <a href="formModificarDestino.php?destID=<?php echo $destino['destID'];?>" class="btn btn-outline-secondary">
                        modificar
                    </a>
                </td>
                <td>
                    <a href="formEliminarDestino.php?destID=<?php echo $destino['destID'];?>" class="btn btn-outline-secondary">
                        eliminar
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

<?php
    include 'templates/footer.php';
?>