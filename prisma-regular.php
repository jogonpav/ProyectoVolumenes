<!DOCTYPE html>
<html>
  <head>
    <title>Calculo de volumen</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	
    	.contenedor{
		background: #CBBB62;
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
   	
   	
    <h1><?php echo "PROYECTO" ?></h1>
     <br/>
     <h2><?php echo "Área y volúmen de Prisma Regular" ?></h2>
    
	 

     <div class="contenedor">
    <div>
    	<img class="imganfigu"src="/ProyectoVolumenes/imagenes/prisma-regular.jpg">
    </div>
    <div>
		<form name="formularioDatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 

		

		Números de lados del polígono n; n >= 5: <input type="text" name="OrtN" value="">

		Introduzca lado b: <input type="text" name="OrtB" value="">
		
		Introduzca apotema a: <input type="text" name="OrtA" value="">

		Introduzca altura h: <input type="text" name="OrtH" value="">

		
		<input value="Calcular" type="submit" name="submit" />

		<div class="resultado">
		<?php
		error_reporting(0); 	//evita otros mensajes de error
			if (isset($_POST['submit'])){ //evita mensaje de error al darle carlular sin variables cargadas
									
			$OrtA = str_replace(',','.', $_POST['OrtA']);

			$OrtB = str_replace(',','.', $_POST['OrtB']);

			$OrtH = str_replace(',','.', $_POST['OrtH']);		

			$OrtN = $_POST['OrtN'];

			if (empty($OrtA) || empty($OrtB) || empty($OrtH) || empty($OrtN)) //Valida que no quede datos sin cargar por el usuario

				{ echo '<br/><strong>¡ERROR!</strong>...Por favor introduzca todos los lados<br/><br/>';}

		    else {
		    
				
				    if ($OrtN <= 4){ //Valida si n es menor a 4
				    	echo '<br/><strong>¡ERROR!</strong>...n debe ser mayor o igual a 5<br/><br/>';
			    		}
			    	else {

			    		

			    		if (filter_var($OrtN,FILTER_VALIDATE_INT)) //Valida si el número n es entero
			    		{

			
						$area = ($OrtN*$OrtB)*($OrtA+$OrtH);
						$volumen = (($OrtN*$OrtB*$OrtA)/2)*$OrtH;

						echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
						echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
						echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Número Lados = &nbsp;". $OrtN."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado b = &nbsp;". $OrtB."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema = &nbsp;".$OrtA."&nbsp;&nbsp;&nbsp;<br/> Altura h =&nbsp;<strong>".$OrtH."&nbsp;<br/>";
						}

						else {

						echo '<br/><strong>¡ERROR!</strong>...n debe ser un número entero<br/><br/>';

						}



						}
				



				}

			
			}
		?>
		</div>

		</form>

		</div>
		</div>


  </body>


</html>
