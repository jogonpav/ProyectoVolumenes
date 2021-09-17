<!DOCTYPE html>
<html>
  <head>
    <title>Calculo de volumen</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	
    	.contenedor{
		background: #3CB4B0;
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
     <h2><?php echo "Área y volúmen de Prisma Triangular Rectangular" ?></h2>
    
	 

     <div class="contenedor">
    <div>
    	<img class="imganfigu"src="/ProyectoVolumenes/imagenes/Prisma-triangular-rectangular.jpg">
    </div>
    <div>
		<form name="formularioDatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

		

		Introduzca lado a: <input type="text" name="OrtA" value="">

		Introduzca lado b: <input type="text" name="OrtB" value="">
		
		Introduzca lado h: <input type="text" name="OrtH" value="">

		
		<input value="Calcular" type="submit" name="submit" />

		<div class="resultado">
		<?php
		error_reporting(0); 		//evita otros mensajes de error
			if (isset($_POST['submit'])){ //evita mensaje de error al darle carlular sin variables cargadas

			
			$OrtA = $_POST['OrtA'];

			$OrtB = $_POST['OrtB'];

			$OrtH = $_POST['OrtH'];

			if (empty($OrtA) || empty($OrtB) || empty($OrtH)) //Valida que no quede datos sin cargar por el usuario

			{ echo '<br/><strong>¡ERROR!</strong>...Por favor introduzca todos los lados<br/><br/>';}

		    else {
		
			$areapritriarec = (sqrt((pow($OrtH,2)+ pow($OrtB,2)))+$OrtB+$OrtH)*$OrtA + 2*(($OrtH*$OrtB)/2);
			$volumepritriarec = (($OrtH*$OrtB)/2)*$OrtA;

			echo " <br/><strong>Área:</strong> &nbsp;". $areapritriarec. "&nbsp; Unidades Cuadradas <br/>";
			echo "<br/><strong>Volumen:</strong> &nbsp;". $volumepritriarec. "&nbsp; Unidades cúbicas <br/><br/>";
			echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>lado a = &nbsp;". $OrtA."</strong> &nbsp;&nbsp;&nbsp; <strong>lado b = &nbsp;".$OrtB."&nbsp;&nbsp;&nbsp; lado h =&nbsp;<strong>".$OrtH."&nbsp;<br/>";


			}

			
			}
		?>
		</div>

		</form>

		</div>
		</div>


  </body>


</html>
