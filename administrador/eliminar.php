<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    // Realiza la operación de eliminación utilizando el ID
    $stmt = $conexion->prepare("DELETE FROM viernes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

// Redirecciona a la página donde se muestra la lista después de eliminar
header("Location: menuadmin.php"); // Cambia 'lista.php' al nombre correcto de tu archivo
exit();
?>
