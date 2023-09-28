<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
include('../funciones.php');

$email = "";
$pass = "";

if ($_POST) {
    $errores = logear($_POST);

    //variables para persistencia
    $email = $_POST['email'];
    $pass = $_POST['pass'];
} ?>

<style>
    body {
        background-image: url('../imagenes/fondo1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

</style>

<body>
    <div class="container justify-content-center text-center col-5">
        <br><br><br><br><br>
        <div class="text-center text-white bg-dark bg-opacity-80 border border-light rounded-start">
            <form action="login.php" method="POST" enctype="multipart/form-data">
                <div class="m-3">
                    <label for="" class="form-label fs-4 fst-italic">Ingrese Email:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $email ?>">
                    <label for="" class="form-label fs-4 fst-italic">Ingrese Contraseña:</label>
                    <input type="password" class="form-control" name="pass" placeholder="Ingrese Contraseña">

                    <label for="" class="form-label fs-5 fst-italic">Ingrese el siguiente texto:</label>
                    <img src="catcha.php" alt="Captcha Image" class="m-2">

                    <input type="text" class="form-control" name="captcha" require> <br>
                
                <input class="btn btn-success m-2" href="../administrador/menuadmin.php" type="submit" value="ENVIAR">
                </div>
            </form>
        </div>
    </div>
    
</body>