<?php 
$URL = 'http://localhost/Bluemoon/' ;
include('../funciones.php')?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
body {
    background-image: url('../imagenes/fondo1.jpg');
    background-size: cover;
}

ul {
    margin: 2%;
    padding: 1%;
    border-radius: 20px;
    border: solid black 2px;
    background-color: rgba(18, 63, 115, 0.985);
    opacity: 55%;
}

ul li a {
    font-family: cursive;
    font-size: 150%;
    color: white;
    text-decoration: none;
}
 ul li a:hover {
    color: rgb(240, 240, 241);
    font-size: 250%;
}
</style>
<body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $URL ?>publicas/index.php">Lista</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $URL ?>publicas/agregar.php">Agregar Nuevo</a>
        </li>
    </ul>