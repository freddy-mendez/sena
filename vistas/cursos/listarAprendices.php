<?php

require_once('../../entidad/Aprendiz.php');

session_start();

if (isset($_GET['id'])) {

$id = $_GET['id'];

$aprendices=$_SESSION['aprendices'];


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Aprendices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Lista de Aprendices</h1>
        <br><br>
        <form method="post" action="addAprendicesCurso.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <button type="submit" class="btn btn-success">Agregar</button>
        <?php
        if (count($aprendices)>0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <th></th>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    
                </thead>
                <tbody>
                    <?php
                    foreach($aprendices as $posicion => $aprendiz) {
                        echo "<tr>";
                        echo "<td><input type='checkbox' name='inscritos[]' value='".$posicion."' /></td>";
                        echo "<td>$posicion</td>";
                        echo "<td>$aprendiz->doc</td>";
                        echo "<td>$aprendiz->nom</td>";
                        ?>
                        <td><?php echo $aprendiz->ape; ?></td>
                        <td><?php echo ($aprendiz->email)?$aprendiz->email:"No tienen Email"; ?></td>
                        <?php
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<h2>No existen aprendices</h2>";
        }
        ?>
        </form>
    </div>
</body>
</html>



<?php
} else {
    echo "<script>alert('Operación no valida');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}

?>