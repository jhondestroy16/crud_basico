<?php

include("conexion.php");
$con = conectar();

$id = $_POST['id'];
$cod_estudiante = $_POST['cod_estudiante'];
$dni = $_POST['dni'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$sql = "UPDATE alumno SET  cod_estudiante = '$cod_estudiante', dni='$dni',nombres='$nombres',apellidos='$apellidos' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
}
