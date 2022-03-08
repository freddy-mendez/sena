<?php
require_once('../../entidad/Curso.php');
require_once('../../entidad/Instructor.php');
require_once('../../entidad/Aprendiz.php');

session_start();

if (isset($_GET['id'])) {

$id = $_GET['id'];

$curso = $_SESSION['cursos'][$id];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Aprendices al Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <a href="index.php" class="btn btn-secondary float-end mt-2">Volver</a>
        <table class="table table-striped mt-3">
            <tbody>
                <tr>
                    <td><spam>Id:</spam></td>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <td><spam>Codigo:</spam></td>
                    <td><?php echo $curso->cod; ?></td>
                </tr>
                <tr>
                    <td><spam>Nombre:</spam></td>
                    <td><?php echo $curso->nom; ?></td>
                </tr>
                <tr>
                    <td><spam>Instructor:</spam></td>
                    <td><?php echo $curso->instr->nom; ?> <?php echo $curso->instr->ape; ?></td>
                </tr>
                <tr>
                    <td><spam>Numero de Horas:</spam></td>
                    <td><?php echo $curso->numHoras; ?></td>
                </tr>
            </tbody>
        </table>
        <br><br>
        <?php
        if (count($curso->aprendices)>0) {
            ?>
            <table class="table table-striped">
                <thead>
                    <th>Id</th>
                    <th>Documento</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>

                </thead>
                <tbody>
                    <?php
                    foreach($curso->aprendices as $posicion => $aprendiz) {
                        echo "<tr>";
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
            echo "<h2>No existen aprendices en el curso</h2>";
        }
        ?>
    </div>
</body>
</html>


<?php
} else {
    echo "<script>alert('Operación no valida');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}
?>