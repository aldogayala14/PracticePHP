<?php

$texto_nuevo =$_GET['texto'];
$archivo = $_GET['archivo'];

if($_GET['accion'] == "Guardar"){
    file_put_contents($archivo, $texto_nuevo);
}

$texto = file_get_contents($archivo);
//echo $texto;

?>

<h1>Editar texto de archivo</h1>
<form>
    <label>Nombre del archivos:</label>
    <input type="text" name="archivo" value="<?=$archivo ?>"/><br/>
    <textarea name="texto"><?=$texto ?></textarea>
    <br/>
    <input type="submit" value="Guardar" name="accion" />
    <input type="submit" value="Cargar" name="accion" />
</form>

<style>
    textarea{
        height: 300px;
        width: 321px;
    }
</style>