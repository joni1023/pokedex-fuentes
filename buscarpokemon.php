<?php
require 'conexion.php';

$buscado=$_POST['pokemonbuscado'];
if(isset($buscado)){
    $q="select * from pokemon where nombre='$buscado'; ";
    $consulta=mysqli_query($conexion,$q);
    $array= mysqli_fetch_array($consulta);
    if($array){





    }else{
        echo "no encontrado";
    }

}else{
    echo "<p>todos los pokemons </p>";
    $q="select * from pokemon ";
    $consulta=mysqli_query($conexion,$q);
    $colum = mysqli_fetch_array($consulta);
    do{
        echo $colum["nombre"]."  y la es  ". $colum["especie"];

    }while($colum=mysqli_fetch_array($consulta));

}



