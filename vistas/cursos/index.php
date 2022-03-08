<?php

require_once('../../entidad/Curso.php');
require_once('../../entidad/Instructor.php');

session_start();

if (!isset($_SESSION['cursos'])) {
    $_SESSION['cursos'] = array();
}

if (!isset($_SESSION['instructores'])) {
    $_SESSION['instructores']=array();
    $_SESSION['instructores'][]=new Instructor(123,"Freddy","Mendez");
    $_SESSION['instructores'][]=new Instructor(234, "Sergio", "Marin");
    /*$_SESSION['instructores']=[new Instructor(123,"Freddy","Mendez"),
     new Instructor(234, "Sergio", "Marin")];*/
}

/***** */
if (count($_SESSION['cursos'])==0) {
    $_SESSION['cursos'][]=new Curso(1122, "Programación", $_SESSION['instructores'][0], 2000);
}
/**** */

$cursos = $_SESSION['cursos'];


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Lista de Cursos</h1>
        <br><br>
        <a href="create.php" class="btn btn-success">Agregar Curso</a>
        <br><br>
        <?php
            if (count($cursos)>0) {
                echo "<table class='table table-striped'>";
                echo "<thead>";
                echo "<tr><th>Id</th>";
                echo "<th>Codigo del Curso</th>";
                echo "<th>Nombre del Curso</th>";
                echo "<th>Instructor del Curso</th>";
                echo "<th>Numero de Horas del Curso</th>";
                echo "<th>Opciones</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";
                foreach($cursos as $indice => $curso) {
                    echo "<tr>";
                    echo "<td>".$indice."</td>";
                    echo "<td>".$curso->cod."</td>";
                    echo "<td>".$curso->nom."</td>";
                    echo "<td>".$curso->instr->nom." ".$curso->instr->ape."</td>";
                    echo "<td>".$curso->numHoras."</td>";
                    echo "<td>";
                    echo "<a href='agregarAprendiz.php?id=".$indice."' class='btn btn-primary btn-sm me-1'>Agregar Aprendices</a>";
                    echo "<a href='edit.php?id=".$indice."' class='btn btn-warning btn-sm me-1'>Editar</a>";
                    echo "<a href='delete.php?id=".$indice."' class='btn btn-danger btn-sm me-1'>Eliminar</a>";
                    echo "<a href='show.php?id=".$indice."' class='btn btn-secondary btn-sm'>Ver Curso</a>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<h2>No existen cursos</h2>";
            }
        ?>
    </div>
</body>
</html>