<?php

session_start();

if (isset($_GET['id'])) {
    $pos = $_GET['id'];
    unset($_SESSION['aprendices'][$pos]);
    header("Location: index.php");
} else {
    echo "<script>alert('Petición incorrecta');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
}