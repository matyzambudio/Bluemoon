<?php include('administrador/conexion.php') ;

$sql= $conexion->prepare("SELECT * FROM menu");
$sql->execute();
$menu = $sql->get_result();
$info = $menu->fetch_all(MYSQLI_ASSOC);?>

<style>
   .container{
    align-items: center;
    width: 60%;
    margin-top: 5%;
    padding-bottom: 2%;
   }
   .card{
       background-color: darkgrey;
       opacity: 60%;
       padding: 1%;
       margin-bottom: 5%;
       border-radius: 20px;
   }
   .card:hover{
       opacity: 100%;
       background-color: white;
       color:black;
   }
   .card-title{
    text-align: center;
    font-size: 140%;
    font-family: cursive;
    color: blue;
   }
   .card-text{
      margin: 1%;
      padding: 1%;
   }
   .link{
      color: blue;
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      font-size: 100%;
   }
   a{
    text-decoration: none;
    font-size: 100%;
   }   
.img-fluid{
    border-radius: 20% 0 20% 0 ;
    transition: .5s, color .10s;
        -webkit-transition: .5s, color .10s;
        -moz-transition: .5s, color .10s;
}
.img-fluid:hover{
    transform: scale3d(1.5, 1.5, 0.3);
        -webkit-transform: scale3d(1.5, 1.5, 0.3);
        -moz-transform: scale3d(1.5, 1.5, 0.3);
}
</style>
<div class="container">
<?php foreach( $info as $menu){?>
    <div class="card">
      <div class="row g-0 p-2">
            <div class="col-md-4">
                <img src="<?php echo $menu['foto']?>" class="img-fluid">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $menu['titulo']?></h5>
                    <p class="card-text"> <?php echo $menu['texto']?></p>
                    <p class="card-text">Link:<br>
                         <small class="text-muted">
                            <a href="<?php echo $menu['link']?>"><?php echo $menu['link']?></a>
                        </small>
                     </p>
                </div>
            </div>
        </div>
     </div> <?php }?> 
</div>