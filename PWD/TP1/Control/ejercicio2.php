<!DOCTYPE html>
<html lang="es">
    <head>
			<!-- Metadatos -->
			<meta charset="UTF-8">
			<meta name="author" content="PABLO NAVARRO FAI-4284">
			<meta name="description" content="Ejercicio PWD">
			<meta name="keywords" content="formulario, PHP, HTML, CSS, JS">
      <meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- TITULO -->
			<title>Ejercicio PWD</title>
			<!-- Favicon -->
			<link rel="icon" type="image/x-icon" href="../IMAGES/martillos.png">
			<!-- BOOTSTRAP -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
			<!-- CSS -->
			<link href="CSS/style.css" rel="stylesheet">
	
        <title>Respuestas</title>
    </head>
    <body>
			
			<section class="eje1 seccion-clara">
				<div class="container text-center">
					<div class="row">
					<div class="columna col-12 col-md-3">
            <p class="ejercicios-titulo">Respuesta Ej2</p>
            <?php
            $arraydias=[$_GET['lunes'],$_GET['martes'],$_GET['miercoles'],$_GET['jueves'],$_GET['viernes']];
            $suma=0;
            for($i=0; $i<count($arraydias); $i++){
              $suma=$suma+$arraydias[$i];
              }
            echo "<p class='ejercicios-respuesta'>Las horas catedra de la semana son: ".$suma."</p>";
            ?>
            </div>
						</div>
						</div>
						<div class="mb-3">
                    <a href= "../Vista/ejercicio2.php" class="btn btn-primary">Volver</a>
                </div>	
            </div>
</section>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
    
</html>