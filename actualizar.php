<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumno WHERE id ='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Cod. Estudiante</label>
                <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="cod_estudiante" value="<?php echo $row['cod_estudiante']  ?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">DNI del Estudiante</label>
                <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni']  ?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Estudiante</label>
                <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Apellido del Estudiante</label>
                <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>