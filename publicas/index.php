<?php include('../administrador/headmin.php') ;
include('../administrador/conexion.php');

//selecciona todo de la tabla viernes ! 
$sql = $conexion->prepare("SELECT * FROM viernes ORDER BY Publica ASC, Apellido ASC");

$sql->execute();
$viernes = $sql->get_result();
$listapersonas = $viernes->fetch_all(MYSQLI_ASSOC); ?>

<style>
    .container {
        width: 90%;
        margin-top: 2%;
    }

    .table-responsive {
        border-radius: 0% 7% 0% 7%;
        margin: 5%;
        padding: 2%;
        background-color: rgb(248, 193, 193);
        border: solid 2px red;
        opacity: 75%;
    }

    th,
    td {
        font-size: 120%;
        color: black;
    }

    h1 {
        text-align: center;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 10px;
    }

    .flicker {
        animation-name: flicker;
        animation-duration: 2s;
        animation-iteration-count: infinite;
    }

    @keyframes flicker {
        0% {
            opacity: 1;
        }

        25% {
            opacity: 0.5;
        }

        50% {
            opacity: 1;
        }

        75% {
            opacity: 0.5;
        }

        100% {
            opacity: 1;
        }
    }

    .pulse {
        animation-name: pulse;
        animation-duration: 1s;
        animation-iteration-count: infinite;
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }

        100% {
            transform: scale(1);
        }
    }
</style>


<br><br>
<div class="container">
    <div class="table-responsive">
        <h1 class="flicker">Lista Viernes</h1>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Publica</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listapersonas as $viernes) { ?>
                    <tr>
                        <th><?php echo $viernes['id']; ?></th>
                        <td><?php echo $viernes['Apellido']; ?></td>
                        <td><?php echo $viernes['Nombre']; ?></td>
                        <td><?php echo $viernes['Publica']; ?></td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table> <br>
        <div class="text-center">
        <button type="button" class="pulse btn btn-primary p-2" onclick="window.location.href='agregar.php'">Agregar Nuevo</button>

        </div>
    </div>
    <br><br>