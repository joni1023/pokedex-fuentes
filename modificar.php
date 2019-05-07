<?php
session_start();
if(isset($_SESSION['username'])){
    $id=$_POST['id'];
    echo " <form action='modificado.php' method='post'>
    <input type='hidden' name='id' value='$id'>
    <input type='text' name='numero' required >
    <input type='text' name='nombre' required > 
    <input type='text' name='tipo' required>
    <input type='text' name='imagen' required>
    <input type='text' name='especie' required>
    <input type='submit' value='modificar'>

</form>";

}