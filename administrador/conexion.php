<?php

define("HOST","localhost"); 
define("USER","root"); 
define("PASS",""); 
define("BD","bluemoon"); 

$conexion = mysqli_connect(HOST, USER, PASS, BD)or exit("No se pudo conectar a la BD");

?>