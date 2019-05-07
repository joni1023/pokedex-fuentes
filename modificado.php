<?php
require 'conexion.php';
session_start();
if(isset($_SESSION['username'])){
    if(isset($_POST['numero']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['imagen']) && isset($_POST['especie'])){
        $id=$_POST['id'];
        $numero=$_POST['numero'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $imagen=$_POST['imagen'];
        $especie=$_POST['especie'];
        echo $especie;

        $q="update pokemon set nombre='".$nombre."',numero='".$numero."', tipo='".$tipo."', imagen='".$imagen."', especie='".$especie."' where id='".$id."'";
        if(mysqli_query($conexion,$q)){
            header("location:index.php");
        }else{
            echo "error";
            }

    }





}
