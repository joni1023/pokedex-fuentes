<?php
require 'header.php';
?>
<body>
<div class="container">
<h1>agregar un pokemon</h1>
    <div class="panel panel-info">
        <div class="panel-heading"><h3 class="panel-title">agregar un pokemon</h3></div>
        <div class="panel-body">
<form class="form-horizontal" action="agregarpokemon.php" method="post">
        <div class="form-group">
                <label class="control-label col-sm-2">Numero:</label>
            <div class="col-sm-10">
                <input type="text" name="numero" id="" required>
            </div>
        </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Nombre:</label>
        <div class="col-sm-10">
        <input type="text" name="nombre" id="" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Tipo:</label>
        <div class="col-sm-10">
        <input type="text" name="tipo" id="" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">imagen (url):</label>
        <div class="col-sm-10">
            <input type="text" name="imagen" id="" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2">Especie:</label>
        <div class="col-sm-10">
    <input type="text" name="especie" id="" required>
        </div>
    </div>
    <div class="col-sm-offset-2 col-sm-12">
    <input type="submit" class="btn btn-success" value="agregar">
    </div>
    </div>

</form>
    </div>
</div>
<?php
require 'conexion.php';
if(isset($_POST['numero']) && isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['imagen']) && isset($_POST['especie'])){
    $numero=$_POST['numero'];
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $imagen=$_POST['imagen'];
    $especie=$_POST['especie'];

    $q="insert into pokemon (numero,nombre,tipo,imagen,especie) values ('$numero','$nombre','$tipo','$imagen','$especie')";
    if(mysqli_query($conexion,$q)){
        header("location:index.php");
    }else{echo "error";}

}
?>
</div>
</body>
