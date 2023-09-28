
<?php $URL = 'http://localhost/Bluemoon/';
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blue Moon</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="<?php echo $URL?>stylo.css">
</head>
<style>
    body {
        width: 100%;
        background-image: url("imagenes/fondo2.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        margin: 0; /* Asegura que no hay ningún margen predeterminado */
        font-size: 16px; /* Tamaño de fuente base para unidades em */
    }
    .container {
        width: 100%;
        height: 60vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    #i {
        font-size: 3em; /* Tamaño de fuente más manejable en dispositivos móviles */
        color: #fff;
        border:  2px 2px 2px #02127080, 10px 11px 12px #050d6280,
            2px 2px 100px #03105a80, 2px 2px 3px #060d6180, inset 2px 22px 100px #1105b380,
            inset 2px 2px 100px #1a069a80, inset 2px 2px 10px #04063480,
            inset 2px 2px 100px #040c5780;
        border-radius: 20%;
        padding: 0.5em 1em; /* Padding más manejable */
        margin: 1em 0; /* Margen para separar los elementos */
        animation: animate 3s linear infinite;
        text-shadow: 0 0 5px #0072ff, 0 0 10px #0072ff, 0 0 15px #0072ff,
            0 0 20px #0072ff;
    }

    #i {
        animation-delay: 0.3s;
    }


    @keyframes animate {
        from {
            filter: hue-rotate(5deg);
        }

        to {
            filter: hue-rotate(360deg);
        }
    }

    @media screen and (min-width: 768px) {
        #i {
            font-size: 8em;
        }
    }
</style>
<body>
    <div class="container">
        <div class="row col">
            <div class="col-11">
                <div id="i" class="col-6 text-center mt-3 mb-2 display-4">BLUEMOON
                 </div>
            </div>
        </div>
    </div>