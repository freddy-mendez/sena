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
        <form method="post" action="save.php">
            <input class="form-control" type="number" name="doc" />
            <input class="form-control" type="text" name="nom" />
            <input class="form-control" type="text" name="ape" />
            <input class="form-control" type="email" name="email" />
            <button class="btn btn-success" type="submit">Crear Aprendiz</button>
        </form>
        
        
    </div>
</body>
</html>