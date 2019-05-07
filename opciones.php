<?php
session_start();
if(isset($_SESSION['username'])){
    if(isset($_POST['botone'])){
        include 'conexion.php';
        $id=$_POST['id'];
        $q="delete from pokemon where id=$id";

        if(mysqli_query($conexion,$q)){
            header("location:index.php");
        }
//areglaar lo de boton eliminar ya que solo es un solo boton
}}