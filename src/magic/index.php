<?php 
        namespace Daw\Magic;
		require_once ("carta.php");
		require_once ("funciones.php");
	?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/estilos.css">
    <title>Galería Cartas Magic</title>
	
</head>
<body>
    <header>
        
    </header>
    <main class="galeria">
        <?php
            
            $num_cartas = 0;
            $unidadescarta = consultacartas($num_cartas);
        ?>
    </main>
    <footer>
        <?php
            
            informacioncartas($unidadescarta,$num_cartas);
            botonesordenar();
        ?>
    </footer>

    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>