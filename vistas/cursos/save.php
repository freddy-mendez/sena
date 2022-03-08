<?php

require_once('../../entidad/Curso.php');
require_once('../../entidad/Instructor.php');

session_start();

if (isset($_POST['cod']) && isset($_POST['nom']) && isset($_POST['instructor']) && isset($_POST['numHoras'])) {
    $pos_inst = $_POST['instructor'];
    $instructor = $_SESSION['instructores'][$pos_inst];
    $curso = new Curso($_POST['cod'], $_POST['nom'], $instructor, $_POST['numHoras']);
    $_SESSION['cursos'][]=$curso;
    header('Location: index.php');
} else {
    echo "<script>alert('Todos los campos son requeridos');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}
?>