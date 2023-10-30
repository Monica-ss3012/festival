<?php
include 'config.php';
// include 'registro.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Festival Musical</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="theme-color" content="#ff2e01">
	<meta name="MobileOptimized" content="width">
	<meta name="HandhledFriendly" content="true">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar" content="black-traslucent">

	<!--Tags SEO-->
	<meta name="author" content="Evento - Plastimedia">
	<meta name="description" content="Aplicativo para el registro al Evento - Plastimedia">
	<meta name="keyworks" content="evento, Evento, registro, Registro">

	<!--Favicon-->
	<link rel="icon" type="image/x-icon" href="assets/img/img2.png">
	<link rel="apple-touch-icon" type="image/png" href="assets/img/img2.png">

    <!--Styles css-->
    <link rel="stylesheet" href="assets/styles/styles.css">
</head>
<body>
    <!-- //inicio formulario -->
    <div class="contact-form">
        <form  action="registro.php" class="form" id="formulario" method="POST">
            <div class="container">
                <h2><em>Formulario de registro</em></h2><br>
                <div class="form_registro">
                    <label>
                        <em class="fa fa-user">Nombres</em>
                        <input type="text" name="name" placeholder="ingrese sus nombres" required autofocus><br>
                    </label>
                    <br>
                    <label>
                        <em>Apellidos</em>
                        <input type="text" name="lastname" placeholder="ingrese sus apellidos" required><br>
                    </label>
                    <br>
                    <label>
                        <em>Correo Electronico</em>
                        <input type="email" name="email" placeholder="ingrese su email" required><br>
                    </label>
                    <br>
                    <label>
                        <em>Numero telefonico</em>
                        <input type="text"  name="phone" placeholder="ingrese su telefono" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required><br>
                    </label>
                    <br>
                    <label id="tip_bolet">
                        <em>Tipo de boleto</em>
                        <select name="boletos" id="boleto" class="dataTables_wrapper .dataTables_length select">
                            <option value="vip">VIP</option>
                            <option value="general">General</option>
                        </select><br>
                    </label>
                    <br>
                    <input type="checkbox" required  name="check"><em> Acepto términos y condiciones</em>
                    <input class="registrarme"  id="Enviar" name="bEnviar" type="submit" value="Registrarme">
                </div>
                <button type="button" class="Ver" onclick="location.href='registeredusers.php'">Ver registros</button>
            </div>
        </form>
    </div>
    <script src="assets/js/validation.js"></script>
    <!-- fin de formulario -->

</body>
</html>