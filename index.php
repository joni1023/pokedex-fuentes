
<!DOCTYPE html>
<html lang="es">
<title>Pokedex</title>
<?php
require 'header.php';
?>
<body>
<div class="container">
    <div class="row">
    <div class="col-lg-4"></div>
    <img src="recursos/logo.png" class="img-responsive col-sm-4">
    <div class="col-lg-4"></div>
    </div>
    <div class="row">

<div class="col-lg-3"></div>
    <div class="col-lg-6 " >
    <form class="form form-inline " action="index.php" method="post">
        <div class="form-group">
            <label class="control-label">Buscar el pokemon:</label>
            <input type="text" class="form-control" name="pokemonbuscado" placeholder="ingrese nombre del pokemon" required">
        </div>
        <input type="submit" value="Buscar" class="btn btn-success">

    </form>
    </div>
    </div>
    <div class="col-lg-3"></div>

<?php
require 'conexion.php';
if(isset($_POST['pokemonbuscado'])){
    $buscado=$_POST['pokemonbuscado'];
    $q="select * from pokemon where nombre='$buscado'; ";
    $consulta=mysqli_query($conexion,$q);
    $array= mysqli_fetch_array($consulta);
    if(isset($array)){
        echo "<h2>Resultado</h2>";
        echo "<table class='table'>
        <thead>
                <tr>
                  <th scope='col'>Numero</th>
                  <th scope='col'>Nombre</th>
                  <th scope='col'>tipo</th>
                  <th scope='col'>imagen</th>
                  <th scope='col'>especie</th>
                  <th scope='col'></th>
                </tr>
              </thead>";
        echo " <tbody>
                <tr>
                  <th scope='row'>".$array["numero"]."</th>
                  <td>".$array["nombre"]."</td>
                  <td>".$array["tipo"]."</td>
                  <td><img src='".$array["imagen"]."' width='30' height='30'></img></td>
                  <td>".$array["especie"]."</td>
                  <td>";
        if(isset($_SESSION['username'])){
            echo " <form  action='opciones.php' method='post'>
                    <input type='hidden' name='id' value='".$array['id']."'>
                    <input type='submit' name='botone' value='eliminar'>
                    <input type='submit' formaction='modificar.php' value='modificar'>
                  </form> ";}


        echo "</td></tr></tbody></table>";
        }else{
        echo "<p>pokemon no encontrado</p>";
        echo "<h2>Lista de Pokemons</h2>";
        $q="select * from pokemon ";
        $consulta=mysqli_query($conexion,$q);
        $colum = mysqli_fetch_array($consulta);
        echo " <table class='table'>
              <thead>
                <tr>
                  <th scope='col'>Numero</th>
                  <th scope='col'>Nombre</th>
                  <th scope='col'>tipo</th>
                  <th scope='col'>imagen</th>
                  <th scope='col'>especie</th>
                  <th scope='col'></th>
                </tr>
              </thead>";
if(isset($colum)){
        do{
            echo " <tbody>
                <tr>
                  <th scope='row'>".$colum["numero"]."</th>
                  <td>".$colum["nombre"]."</td>
                  <td>".$colum["tipo"]."</td>
                  <td><img src='".$colum["imagen"]."' width='30' height='30'></img></td>
                  <td>".$colum["especie"]."</td>
                  <td>";
            if(isset($_SESSION['username'])){
                echo " <form  action='opciones.php' method='post'>
                    <input type='hidden' name='id' value='".$colum['id']."'>
                    <input type='submit' name='botone' value='eliminar'>
                    <input type='submit' formaction='modificar.php' value='modificar'>
                  </form> ";
            }


        }while($colum=mysqli_fetch_array($consulta));
        echo "</td>
                </tr>
              </tbody>
            </table>";

}
            }

}else{
    echo "<h2>Lista de Pokemons</h2>";
    $q="select * from pokemon ";
    $consulta=mysqli_query($conexion,$q);
    $colum = mysqli_fetch_array($consulta);
     echo " <table class='table'>
              <thead>
                <tr>
                  <th scope='col'>Numero</th>
                  <th scope='col'>Nombre</th>
                  <th scope='col'>tipo</th>
                  <th scope='col'>imagen</th>
                  <th scope='col'>especie</th>
                  <th scope='col'></th>
                </tr>
              </thead>";
 if(isset($colum)) {
     do {
         echo " <tbody>
                <tr>
                  <th scope='row'>" . $colum["numero"] . "</th>
                  <td>" . $colum["nombre"] . "</td>
                  <td>" . $colum["tipo"] . "</td>
                  <td><img src='" . $colum["imagen"] . "' width='30' height='30'></img></td>
                  <td>" . $colum["especie"] . "</td>
                  <td>";
         if (isset($_SESSION['username'])) {
             echo " <form  action='opciones.php' method='post'>
                    <input type='hidden' name='id' value='" . $colum['id'] . "'>
                    <input type='submit' name='botone' value='eliminar'>
                    <input type='submit' formaction='modificar.php' value='modificar'>
                  </form> ";
         }


     } while ($colum = mysqli_fetch_array($consulta));

     echo "</td>
                </tr>
              </tbody>
            </table>";
 }
}

?>
</div>
</body>

</html>