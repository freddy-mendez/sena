<?php

require_once('../../entidad/Curso.php');
require_once('../../entidad/Instructor.php');

session_start();

if (isset($_POST['cod']) && isset($_POST['nom']) && isset($_POST['instructor']) && isset($_POST['numHoras'])) {
    $id = $_POST['id'];
    $pos_inst = $_POST['instructor'];
    $instructor = $_SESSION['instructores'][$pos_inst];
    $curso = $_SESSION['cursos'][$id];
    $curso->cod = $_POST['cod'];
    $curso->nom = $_POST['nom'];
    $curso->instr = $instructor;
    $curso->numHoras = $_POST['numHoras'];
    $_SESSION['cursos'][$id]=$curso;
    header('Location: index.php');
} else {
    echo "<script>alert('Todos los campos son requeridos');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}
?>