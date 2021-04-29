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
	?>
</head>
<body>
    
    <main class="galeria">
	<?php

		$carta = new Carta($carta->id_carta,$carta->nombre,$carta->elemento,$carta->manaincoloro,
		$carta->nummanacolor,$carta->manacolor,$carta->fondo,$carta->tipo,$carta->subtipo,$carta->simboloexp,
		$carta->habilidades,$carta->descripcion,$carta->poder,$carta->resistencia,$carta->autor);
		$carta->mostrarcarta();

	?>
    </main>

    <script type="text/javascript" src="./js/modal.js"></script>
</body>
</html>