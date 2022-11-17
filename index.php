<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM alumno";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Alumno</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insert.php" method="POST">
                    <input type="text" class="form-control mb-3" id="cod_estudiante" required="required" name="cod_estudiante" placeholder="Codigo del estudiante">
                    <input type="text" class="form-control mb-3" id="dni" required="required" name="dni" placeholder="DNI del estudiante">
                    <input type="text" class="form-control mb-3" id="nombres" required="required" name="nombres" placeholder="Nombre del estudiante">
                    <input type="text" class="form-control mb-3" id="apellidos" required="required" name="apellidos" placeholder="Apellido del estudiante">

                    <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table striped">
                        <tr>
                            <th>Codigo</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Detalles</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['cod_estudiante'] ?></th>
                                <th><?php echo $row['dni'] ?></th>
                                <th><?php echo $row['nombres'] ?></th>
                                <th><?php echo $row['apellidos'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>