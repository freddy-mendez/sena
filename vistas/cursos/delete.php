<?php

session_start();

if (isset($_GET['id'])) {
    $pos = $_GET['id'];
    unset($_SESSION['cursos'][$pos]);
    header("Location: index.php");
} else {
    echo "<script>alert('Operación no valida');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}