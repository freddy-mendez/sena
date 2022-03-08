<?php

require_once('../../entidad/Instructor.php');

session_start();

if (isset($_SESSION['instructores'])) {

$instructores = $_SESSION['instructores'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form class="mt-3" method="post" action="save.php">
            <input class="form-control" type="number" name="cod" />
            <input class="form-control" type="text" name="nom" />
            <select name="instructor" class="form-control">
                <?php
                    foreach ($_SESSION['instructores'] as $key => $instructor) {
                        echo "<option value='$key'>".$instructor->nom." ".$instructor->ape."</option>";
                    }
                ?>
            </select>
            <input class="form-control" type="number" name="numHoras" />
            <button class="btn btn-success form-control" type="submit">Crear Curso</button>
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