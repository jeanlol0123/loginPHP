<?php

$conexion=mysqli_connect("localhost:33065","root","","login");

if(!$conexion){
die("No hay conexion: ".mysqli_connect_error());
}

$user = $_POST['user'];
$pass = md5($_POST['pass']);

session_start();
$_SESSION['user']=$user;

$consulta="SELECT*FROM users where user='$user' and pass='$pass'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index2.html");
}else{
    ?>
    <?php
    include("login.html");  
    ?>
    <script>alert('El usuario o contraseña son incorrectos')</script>;
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);