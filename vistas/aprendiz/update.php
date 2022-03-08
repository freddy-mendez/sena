<?php

require_once('../../entidad/Aprendiz.php');

session_start();

if (isset($_POST['doc']) && isset($_POST['nom']) && isset($_POST['ape'])) {
    $pos = $_POST['id'];
    $aprendiz = $_SESSION['aprendices'][$pos];
    $aprendiz->doc = $_POST['doc'];
    $aprendiz->nom = $_POST['nom'];
    $aprendiz->ape = $_POST['ape'];
    if (isset($_POST['email'])) {
        $aprendiz->email=$_POST['email'];
    }
    $_SESSION['aprendices'][$pos] = $aprendiz;
    header("Location: index.php");
} else {
    echo "<script>alert('Petición incorrecta');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
}