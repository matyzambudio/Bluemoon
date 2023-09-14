<?php


function createNewHamburguesa() {
    $URL = 'http://localhost/pancho/';

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $errores = [];

    if (empty($titulo)) {
        $errores[] = "Ingrese un titulo";
    }
    if (empty($descripcion)) {
        $errores[] = "Ingrese una descripcion";
    }
    if (empty($precio)) {
        $errores[] = "Ingrese un precio";
    }

    $imgtemporal = $_FILES['imagen']['tmp_name'];
    $imgnombre = $_FILES['imagen']['name'];
    $rutadestino = $URL . '/imagenes/carrusel/' . $imgnombre;

    if (move_uploaded_file($imgtemporal, $rutadestino)) {
        // El archivo se cargó correctamente
    } else {
        $errores[] = "Error al subir la imagen";
    }
    include('conexion.php');
    $sql = "INSERT INTO hamburguesa (imagen, titulo, descripcion, precio) 
    VALUES ('$rutadestino', '$titulo', '$descripcion', '$precio')";

    if (mysqli_query($con, $sql)) {
        // El registro se insertó correctamente
    } else {
        $errores[] = "Error al insertar el registro en la base de datos: " . mysqli_error($con);
    }

    mysqli_close($con);

    return $errores;
}
?>
