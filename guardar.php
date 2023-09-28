<?php
include('../administrador/headmin.php');
include('../funciones.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    if (empty($errores)) {
        $titulo = $_POST['titulo'];
        $texto = $_POST['info'];
        $link = $_POST['link'];

        // Procesar la imagen
        $foto = $_FILES['foto']['tmp_name']; // Ruta temporal del archivo
        $foto_contenido = file_get_contents($foto); // Leer el contenido del archivo

        // Guardar en la base de datos
         include('../conexion.php');

        $query = "INSERT INTO menu(titulo,texto,link,foto) VALUES
         ('$titulo','$texto','$link', ?)";
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "b", $foto_contenido);
        mysqli_stmt_execute($stmt);
        
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);

        // Redireccionar o mostrar un mensaje de éxito
        // header("Location:nav.php");
        // exit();
    }
}

?>

<style>
.menucliente {
    width: 90%;
    margin: 2% auto;
    border-radius: 0% 7% 0% 7%;
    padding: 2%;
    background-color: rgb(248, 193, 193);
    border: solid 2px red;
    opacity: 80%;
    text-align: center;
}

label {
    font-size: 120%;
    font-family: Arial, Helvetica, sans-serif;
}
</style>

<div class="menucliente">
    <form action="guardar.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="texto" class="form-label">Info:</label>
            <input type="text" class="form-control" id="info" name="info" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link" required>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Imagen</label>
            <input type="file" class="form-control" id="foto" name="foto" required>
        </div>
        <button type="submit" class="btn btn-primary col-11">Guardar</button>
    </form>
</div>
