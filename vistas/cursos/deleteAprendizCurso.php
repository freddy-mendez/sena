<?php

require_once('../../entidad/Curso.php');

session_start();

if (isset($_GET['id']) && isset($_GET['idAprendiz'])) {
    $pos = $_GET['id'];
    $pos_aprendiz = $_GET['idAprendiz'];
    $curso = $_SESSION['cursos'][$pos];
    //echo "$pos --- $pos_aprendiz <br>";
    //echo var_dump($curso);
    //echo "<br>";
    unset($curso->aprendices[$pos_aprendiz]);
    //echo var_dump($curso);
    header("Location: agregarAprendiz.php?id=".$pos);
} else {
    echo "<script>alert('Operación no valida');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}