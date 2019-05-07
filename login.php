<?php
if (!isset($_SESSION)) session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}

?>
<html lang="en">
<head>
    <title>Pokedex</title>
    <link rel="stylesheet" href="recursos/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
require 'header.php';
?>
<body class="container">
<h1>loguear</h1>
<form action="login.php" method="post">
    <div class="form-group">
        <label for="email">Nombre de Usuario:</label>
        <input type="text" name="usuario" class="form-control" id="">
    </div>
    <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" name="clave" id="">
    </div>
    <button type="submit" class="btn btn-default">Aceptar</button>
</form>

<?php

require 'conexion.php';

if(isset($_POST['usuario'])){
    if(isset($_POST['clave'])){
        $usuario=$_POST['usuario'];
        $clave=$_POST['clave'];
        $q="select count(*) as contar from usuario where nombre='$usuario' and clave='$clave' ";
        $consulta=mysqli_query($conexion,$q);
        $array=mysqli_fetch_array($consulta);
        if ($array['contar']>0){
            $_SESSION['username']=$usuario;
            header("location:index.php");
        }else{
            echo "incorrecto";
        }
    }
}
?>
</body>
</html>
