<?php include('../administrador/headmin.php');  ?> <br>
<?php if($_POST){
    $error = agregar();
} ?>

<style>
    .container {
        width: 50%;
        border: solid 1px black;
        opacity: 75%;
        background-color: rgba(187, 13, 13, 0.713);
    }
    .mb-3{
        text-align: center;
        font-size: 100%;
        color: white;
        font-family: cursive;
    }
   
</style>

<div class="container">
    <div class="col-row row-col-sm-1">
        <div>
            <div class="card-body">
                <form action="agregar.php" enctype="multipart/form-data" method="post">
                
                    <div class="mb-3" hidden>
                        <label for="" class="form-label fs-5">ID:</label>
                        <input type="text" class="form-control" name="id" id="id">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Apellido:</label>
                        <input type="text" class="form-control" name="Apellido" id="Apellido" placeholder="Ingrese Apellido">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Nombre:</label>
                        <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Ingrese Nombre">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">DNI:</label>
                        <input type="number" class="form-control" name="DNI" id="DNI" placeholder="Ingrese DNI (Sin puntos,solo numeros)">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Cantidad:</label>
                        <input type="number" class="form-control" name="Cantidad" id="Cantidad" placeholder="Cantidad De Personas">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fs-5">Publica:</label>
                        <input type="text" class="form-control" name="Publica" id="Publica" placeholder="Nombre Publica">
                    </div>
                    <div class="mb-3" hidden>
                        <label for="" class="form-label fs-5">Ingresos:</label>
                        <input type="number" class="form-control" name="Ingresos" id="Ingresos">
                    </div>
                    <div class="row align-items-center m-1">
                        <button type="submit" class="btn btn-success fs-5 gap-1 m-2 col" value="agregar">Agregar</button>
                        <button type="submit" class="btn btn-primary fs-5 gap-1 m-2 col" href="../publicas/index.php">Volver</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
</div>
    <br><br>