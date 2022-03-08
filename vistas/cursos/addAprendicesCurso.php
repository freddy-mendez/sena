<?php
require_once('../../entidad/Aprendiz.php');
require_once('../../entidad/Curso.php');

session_start();

if (isset($_POST['id'])) {
$id = $_POST['id'];
$curso=$_SESSION['cursos'][$id];

foreach ($_POST['inscritos'] as $valor) {
    $existe=false;
    $newAprendiz=$_SESSION['aprendices'][$valor];
    foreach ($curso->aprendices as $aprendiz) {
        if ($aprendiz->doc==$newAprendiz->doc) {
            $existe=true;
            break;
        }
    }
    if (!$existe) {
        $curso->aprendices[]=$newAprendiz;
    }
}
header('Location: agregarAprendiz.php?id='.$id);

} else {
    echo "<script>alert('Operación no valida');</script>";
    echo "<a href='index.php'>Volver Inicio</a>";
}

?>