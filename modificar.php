<?php
include 'header.php';

if(isset($_SESSION['username'])){
    $id=$_POST['id'];
    echo "<div class='container'><div class='panel-info'>
 <div class='panel-heading'><h2 class='panel-title'>Modificar pokemon</h2></div>
 <div class='panel-body'>
 <form class='form-horizontal' action='modificado.php' method='post'>
    <input type='hidden' name='id' value='$id'>
    <div class='form-group'>
        <label class='control-label col-sm-2'>Numero:</label>
        <div class='col-sm-10'>
            <input type='text' name='numero' required >
        </div>
    </div>
    <div class='form-group'>
        <label class='control-label col-sm-2'>Nombre:</label>
        <div class='col-sm-10'>
            <input type='text' name='nombre' required >
        </div>
    </div>
    <div class='form-group'>
        <label class='control-label col-sm-2'>Tipo::</label>
        <div class='col-sm-10'>
            <input type='text' name='tipo' required >
        </div>
    </div>
    <div class='form-group'>
        <label class='control-label col-sm-2'>Imagen:</label>
        <div class='col-sm-10'>
            <input type='text' name='imagen' required >
        </div>
    </div>
    <div class='form-group'>
        <label class='control-label col-sm-2'>Especie:</label>
        <div class='col-sm-10'>
            <input type='text' name='especie' required >
        </div>
    </div>
    <div class='col-sm-offset-2 col-sm-12'>
    <input type='submit' class='btn btn-success' value='modificar'>
    </div>
</form>
</div>
</div>
</div>
";

}