<?php
function logear($datos)   ///////////FUNCIONAAAA////
{
    session_start();
    $email = $datos['email'];
    $pass =  $datos['pass'];
    $captcha = $datos['captcha'];
    $errores = [];
    //validamos los datos
    if ($email == NULL || $email == "") {
        array_push($errores, "Debe completar el email");
    }
    if ($email != NULL) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
            array_push($errores, "El formato de email no es válido");
        }
    }
    if ($pass == NULL || $pass == "") {
        array_push($errores, "Debe completar el pass");
    }

    //Si no hay errores
    if ($errores == NULL) {
        //hacemos la consulta a la BD
        include('../Bluemoon/administrador/conexion.php');
        $sql = "SELECT * FROM usuarios WHERE email = '$email'";
        $consulta =  mysqli_query($conexion, $sql);
        mysqli_close($conexion);

        $rta = mysqli_fetch_array($consulta);
        // Si rta no es null, es decir que trajo un dato

        if ($rta != NULL) {
            //verificamos captcha
            if ($captcha != $_SESSION['captcha']) {
                array_push($errores, "Los códigos no coinciden");
            } else {

                //verificarmos constraseña
                $verifcar = password_verify($pass, $rta['password']);
                if ($email == $rta['email'] && $verifcar == TRUE) {
                    //si esta todo ok, iniciamos sesion
                    session_start();
                    $_SESSION = $rta;
                    // reenviamos al panel de control
                    header('location: administrador/menuadmin.php');
                    exit;
                } else {

                    array_push($errores, "Las contraseñas no coinciden");
                }
            }
        } else {
            echo "<script language='javascript'>
                alert('NO SE PUDO INGRESAR!');
                location.assign('index.php');
            </script>";
            exit;
        }
    }

    return $errores;
}

// Funcion agregar nuevo a lista // FUNCIONA
function agregar()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Apellido = $_POST['Apellido'];
        $Nombre = $_POST['Nombre'];
        $DNI = $_POST['DNI'];
        $Cantidad = $_POST['Cantidad'];
        $Publica = $_POST['Publica'];
        $error = [];


        if ($Apellido == NULL || $Apellido == "") {
            array_push($error, "Debe ingresar el apellido");
        }
        if ($Nombre == NULL || $Nombre == "") {
            array_push($error, "Ingrese un nombre");
        }
        if ($DNI == NULL || $DNI == "") {
            array_push($error, "Debe completar con el Dni del cliente");
        }
        if ($Cantidad == NULL || $Cantidad == "") {
            array_push($error, "Ingrese cantidad de personas para la reserva");
        }
        if ($Publica == NULL || $Publica == "") {
            array_push($error, "Ingrese nombre de publica");
        }


        include('../Bluemoon/administrador/conexion.php');
        // Preparar y ejecutar la consulta
        $sql = "INSERT INTO viernes (Apellido,Nombre,DNI,Cantidad,Publica)
         VALUES ('$Apellido', '$Nombre', '$DNI', '$Cantidad', '$Publica')";


        if ($conexion->query($sql) === TRUE) {
            echo "<script language='javascript'>
            alert('La Reserva fue guardada correctamente');
            location.assign('index.php');
        </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }

        // Cerrar la conexión
        $conexion->close();
        header("location:index.php");
    }
    return $error;
}

