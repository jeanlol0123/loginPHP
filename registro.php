<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$conexion=mysqli_connect("localhost:33065","root","","login");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$user = $_POST['user'];
$pass = md5($_POST['pass']);

$consulta = "INSERT INTO `users` (`user`, `pass`, `nombre`, `apellido`) VALUES ('$user', '$pass', '$nombre', '$apellido');";
$resultado=mysqli_query($conexion,$consulta) or die("error de registro");

echo "<script>alert('Registro de datos exitoso')</script>";

mysqli_close($conexion);
?>