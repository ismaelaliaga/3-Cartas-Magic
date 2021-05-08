<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <title>Galería Cartas Magic</title>
	<?php 
		require_once ("carta.class.php");
		require_once ("funciones.php");
	?>
</head>
<body>
    <main>
        <?php
            añadircarta();
        ?>
    </main>
</body>
</html>