<?php include('conexion.php');

//selecciona todo de la tabla viernes ! 
$sql = $conexion->prepare("SELECT * FROM viernes");

$sql->execute();
$viernes = $sql->get_result();
$listapersonas = $viernes->fetch_all(MYSQLI_ASSOC); ?>


<?php include('headmin.php') ?>

<style>
   .container{
    width: 90%;
    margin-top: 2%;
   }
   .table-responsive{
    border-radius: 0% 7% 0% 7%;
    margin: 1%;
    padding: 2%;
    background-color: rgb(248, 193, 193);
    border: solid 2px red;
    opacity: 80%;
   }
   .letras{
    color: black;
    border: 1px solid black;
    font-size: 120%;
    text-align: center;
   }
   td{
    text-align: center;
    color: black;
    font-size: 120%;
   }
   h1{
    text-align: center;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    font-size: 150%;
    font-weight: 20px;
   }
</style>
<br>
<div class="container">
    <div class="table-responsive">
        <h1>Lista Viernes</h1>
        <table class="table">
            <thead>
                <tr class="letras">
                    <th scope="col">Nº</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Publica</th>
                    <th scope="col">Ingresaron</th>
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listapersonas as $viernes) { ?>
                    <tr>
                        <th><?php echo $viernes['id']; ?></th>
                        <td><?php echo $viernes['Apellido']; ?></td>
                        <td><?php echo $viernes['Nombre']; ?></td>
                        <td><?php echo $viernes['DNI']; ?></td>
                        <td><?php echo $viernes['Cantidad']; ?></td>
                        <td><?php echo $viernes['Publica']; ?></td>
                        <td><?php echo $viernes['Ingresos']; ?></td>
                        <td>
                            <button type="button" class="btn btn-primary col-10 mx-2" onclick="modificar(<?php echo $viernes['id']; ?>)">Modificar</button>
                            <form method="post" action="eliminar.php" onsubmit="return confirmarEliminar()">
                                <input type="hidden" name="id" value="<?php echo $viernes['id']; ?>">
                                <button type="submit" class="btn btn-danger col-10 m-2">Eliminar</button>
                            </form> 
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    function modificar(id) {
        window.location.href = "modificar.php?id=" + id;
    }
    function confirmarEliminar() {
        return confirm("¿Estás seguro de que deseas eliminar este registro?");
    }
</script>