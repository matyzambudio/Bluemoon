<?php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obtener la información del registro a modificar
    $sql = $conexion->prepare("SELECT * FROM viernes WHERE id = ?");
    $sql->bind_param('i', $id);
    $sql->execute();
    $viernes = $sql->get_result();
    $registro = $viernes->fetch_assoc();

    // Cerrar la conexión
    $sql->close();
    $conexion->close();
} else {
    // Si no se proporciona un ID, redirige a la página anterior
    header('Location: menuadmin.php');
    exit();
}
?>
<style>
    .container {
        width: 70%;
        margin-top: 2%;
        border-radius: 0% 7% 0% 7%;
        background-color: rgb(248, 193, 193);
        border: solid 2px red;
        opacity: 80%;
    }
    .menu{
        text-align: center;
    }
    h1{  margin-left: 10%;
        font-size: 120%;
        font-family: cursive;
    }
    label{
        font-family: cursive;
        font-size: 100%;
        color:black
    }
    input{text-align: center;
    }
</style>
<?php include('headmin.php') ?>
<br>
<div class="container"><br>

    <h1>Modificar </h1>
    <div class="menu">
        <form action="actualizar.php" method="post">

            <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
            <!-- Aquí agrega los campos y valores del registro a modificar -->
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="Apellido" name="Apellido" value="<?php echo $registro['Apellido']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $registro['Nombre']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fs-5">Dni:</label>
                <input type="number" class="form-control" name="DNI" id="DNI" value="<?php echo $registro['DNI']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fs-5">Cantidad:</label>
                <input type="number" class="form-control" name="Cantidad" id="Cantidad" placeholder="Cantidad De Personas" value="<?php echo $registro['Cantidad']; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label fs-5">Publica:</label>
                <input type="text" class="form-control" name="Publica" id="Publica" placeholder="Nombre Publica" value="<?php echo $registro['Publica']; ?>">
            </div>
            <div class="mb-3">
                <label for="" class="form-label fs-5">Ingresaron:</label>
                <input type="number" class="form-control" name="Ingresos" value="<?php echo $registro['Ingresos']; ?>">
            </div>

            <button type="submit" class="btn btn-primary col-11" value="actualizar.php">Guardar Cambios</button>
        </form>
    </div>
</div>