<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
    body {
        background-image: url('../imagenes/fondo1.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }

    #tarjetas {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 100%;
        max-width: 300px;
        height: 100%;
        border-radius: 20px;
        border: solid 2px white;
        background-color: black;

        /* Ajusta el ancho máximo de las tarjetas según tus necesidades */
    }

    #foto {
        width: 80%;
        height: 100%;
        margin: 5% 10%;
    }
</style>

<body>
    <div id="tarjetas">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img id="foto" src="https://i.pinimg.com/originals/4c/6b/ea/4c6beac861e424323f0ca050b59120e3.jpg" class="card-img-fluid">
                    <div class="card-body text-center">
                        <div class="d-grid gap-2">
                            <a href="../publicas/index.php" class="btn btn-success fs-4">Publica</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img id="foto" src="https://tse3.mm.bing.net/th?id=OIP.wv8PMN8GWkOiSwp7_MPdFgHaD8&pid=Api&P=0&h=180" class="card-img-fluid">
                    <div class="card-body text-center">
                        <div class="d-grid gap-2">
                            <a href="../administrador/dashboard.php" class="btn btn-primary fs-4">Administrador</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>