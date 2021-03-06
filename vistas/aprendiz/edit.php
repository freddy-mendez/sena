<?php

require_once('../../entidad/Aprendiz.php');

session_start();

if (isset($_GET['id'])) {
    $p = $_GET['id'];
    $aprendiz = $_SESSION['aprendices'][$p];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear de Aprendiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Crear de Aprendiz</h1>
        <br><br>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $p; ?>" />
            <input class="form-control" type="number" name="doc" value="<?php echo $aprendiz->doc; ?>" />
            <input class="form-control" type="text" name="nom"  value="<?php echo $aprendiz->nom; ?>" />
            <input class="form-control" type="text" name="ape"  value="<?php echo $aprendiz->ape; ?>" />
            <input class="form-control" type="email" name="email"  value="<?php echo $aprendiz->email; ?>" />
            <button class="btn btn-success" type="submit">Modificar Aprendiz</button>
        </form>
        
        
    </div>
</body>
</html>

<?php
 } else {
    echo "<script>alert('Petición incorrecta');</script>";
    echo "<a href='index.php'>Volver al Inicio</a>";
}
?>