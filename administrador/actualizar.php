<?php
include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['Apellido']) && isset($_POST['Nombre'])) {
        $id = $_POST['id'];
        $apellido = $_POST['Apellido'];
        $nombre = $_POST['Nombre'];
        $dni = $_POST['DNI'];
        $cantidad = $_POST['Cantidad'];
        $publica = $_POST['Publica'];
        $ingresos = $_POST['Ingresos'];
    
        
        // Actualiza el registro en la base de datos
       
       $sql = $conexion->prepare("UPDATE viernes SET Apellido = ?, Nombre = ?, DNI = ?, Cantidad = ?, Publica = ?, Ingresos = ? WHERE id = ?");
       $sql->bind_param('ssissis', $apellido, $nombre, $dni, $cantidad, $publica, $ingresos, $id);

        $sql->execute();
        
        // Cierra la conexión y redirige de vuelta a la lista
        $sql->close();
        $conexion->close();
        header('Location: menuadmin.php');
        exit();
    }
}

// Si llega aquí, significa que la solicitud no es válida
// Puedes manejar este caso según tus necesidades
