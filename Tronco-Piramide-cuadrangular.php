

<!DOCTYPE html>
<html>
  <head>
    <title>Calculo de volumen</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">    	
    	.contenedor{
		background: #e51a4c;
		}
    </style>
  </head>
  <body>
  	<!-- Menú de navegación del sitio -->
 
<ul class="nav" id="button">
	 <li><a href="/ProyectoVolumenes/index.php">Inicio</a></li>
	 <li><a href="/ProyectoVolumenes/Ortoedro.php">Ortoedro</a></li>
	 <li><a href="#">Prisma</a>
		<ul>
			<li><a href="/ProyectoVolumenes/prisma-triangular-rectangular.php">Prisma Triangular Rectangular</a></li>
			<li><a href="/ProyectoVolumenes/prisma-regular.php">Prisma Regular</a></li>
		</ul>
	 </li>
	 <li><a href="">Pirámides</a>
	 	<ul>
			<li><a href="/ProyectoVolumenes/piramide-triangular.php">pirámide triangular regular</a></li>
			<li><a href="/ProyectoVolumenes/Piramide-cuadrangular.php">Pirámide Cuadrangular regular</a></li>
			<li><a href="/ProyectoVolumenes/Piramide-poligono-regular.php">Pirámide Poligono Regular</a></li>
		</ul>
	 </li>
	 <li><a href="">Troncos de Pirámide</a>
			<ul>
				<li><a href="/ProyectoVolumenes/Tronco-Piramide-cuadrangular.php">Tronco Pirámide Cuadrangular regular</a></li>
				<li><a href="/ProyectoVolumenes/Tronco-Piramide-pentagonal.php">Tronco Pirámide Pentagonal</a></li>
			</ul>
	 </li>
	 <li><a href="/ProyectoVolumenes/cilindros.php">Cilindro</a></li>
	 <li><a href="/ProyectoVolumenes/troncosdecilindros.php">Tronco de cilindro</a></li>
	 <li><a href="/ProyectoVolumenes/conos.php">Cono</a></li>
	 <li><a href="/ProyectoVolumenes/troncosdeconos.php">Tronco de Cono</a></li>
	 <li><a href="/ProyectoVolumenes/esferas.php">Esfera</a></li>
	 <li><a href="/ProyectoVolumenes/semiesferas.php">Semiesfera</a></li>
	 </ul>
     <br/>
   	
   	
     <h1><?php echo "Cálculos de Áreas y Volúmenes" ?></h1>
     <br/>
     <h2><?php echo "Área y volúmen de Tronco de Piramide Cuadrangular Regular" ?></h2>
    
	<div class="contenedor">
    <div>
    	<img class="imganfigu"src="/ProyectoVolumenes/imagenes/Tronco-Piramide-cuadrangular.jpg">
    </div>
    <div>
		<form name="formularioDatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 

		Introduzca lado de la base mayor 𝐿_𝐵𝑀: <input type="text" name="LBM" value="">
		
		Introduzca lado de la base menor 𝐿_𝐵m: <input type="text" name="LBme" value="">

		Introduzca la apotema del tronco de pirámide ap: <input type="text" name="ap" value="">

		Introduzca altura h: <input type="text" name="H" value="">

		
		<input value="Calcular" type="submit" name="submit" />

		<div class="resultado">
		<?php
		error_reporting(0); 	//evita otros mensajes de error
			if (isset($_POST['submit'])){ //evita mensaje de error al darle carlular sin variables cargadas
									
				$ap = str_replace(',','.', $_POST['ap']);

				$LBM = str_replace(',','.', $_POST['LBM']);

				$H = str_replace(',','.', $_POST['H']);

				$LBme = str_replace(',','.', $_POST['LBme']);


				if ( empty($LBM) || empty($LBme)) //Valida que no quede datos sin cargar por el usuario

					{ echo '<br/><strong>¡ERROR!</strong>...Por favor introduzca todos los lados<br/><br/>';}

			    else 
			    	{  
					$area = ($LBM*$LBM)+($LBme*$LBme)+((4*$LBM+4*$LBme)*$ap)/2;
					$volumen = ($H/3)*(($LBM*$LBM)+($LBme*$LBme)+sqrt($LBme*$LBme*$LBM*$LBM));

					echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
					echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
					echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Lado de la Base Mayor 𝐿_𝐵𝑀= &nbsp;". $LBM."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado de la base menor 𝐿_𝐵m= &nbsp;".$LBme."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema del tronco ap= &nbsp;".$ap."&nbsp;&nbsp;&nbsp;<br/> Altura h =&nbsp;<strong>".$H."&nbsp;<br/>";
					}

			}

			
			
		?>
		</div>

		</form>

		</div>
		</div>


  </body>


</html>
