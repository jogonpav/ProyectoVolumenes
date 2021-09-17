

<!DOCTYPE html>
<html>
  <head>
    <title>Calculo de volumen</title>
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	
    	.contenedor{
		background: #9BDD98;
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
     <h2><?php echo "Área y volúmen de Piramide de poligono regular" ?></h2>
    
	<div class="contenedor">
	    <div>
	    	<img class="imganfigu"src="/ProyectoVolumenes/imagenes/Piramide-poligono-regular.jpg">
	    </div>
	    <div>
			<form name="formularioDatos" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post"> 		

			Números de lados del polígono n; n >= 5: <input type="text" name="OrtN" value="">

			Introduzca lado L: <input type="text" name="OrtL" value="">
			
			Introduzca apotema de la pirámide ap <input type="text" name="OrtA" value="">

			Introduzca apotema de la base de la pirámide apb <input type="text" name="OrtAB" value="">

			Introduzca altura h <input type="text" name="OrtH" value="">

			
			<input value="Calcular" type="submit" name="submit" />

				<div class="resultado">
				<?php
				error_reporting(0); 	//evita otros mensajes de error
					if (isset($_POST['submit'])){ //evita mensaje de error al darle carlular sin variables cargadas
											
					$OrtA = str_replace(',','.', $_POST['OrtA']);
					$OrtAB = str_replace(',','.', $_POST['OrtAB']);
					$OrtL = str_replace(',','.', $_POST['OrtL']);
					$OrtH = str_replace(',','.', $_POST['OrtH']);		

					$OrtN = $_POST['OrtN'];

					if (empty($OrtL) || empty($OrtN)) //Valida que no quede datos sin cargar por el usuario
						{ echo '<br/><strong>¡ERROR!</strong>...Por favor introduzca los campos de Número de Lados N y el Lado de la Pirámide L <br/><br/>';}
				    else {   		    				
						    if ($OrtN <= 4){ //Valida si n es menor a 4
						    	echo '<br/><strong>¡ERROR!</strong>...n debe ser mayor o igual a 5<br/><br/>';
					    		}
					    	else 
					    	{
					    		if (filter_var($OrtN,FILTER_VALIDATE_INT)) //Valida si el número n es entero
					    		{  
					    			if (empty($OrtH))
					    			{ //inicio condicional H vacia				    				
					    				if (empty($OrtAB) || empty($OrtA))

						    				{
						    					echo '<br/><strong>¡ERROR!</strong>...se necesitan mínimo dos de estas variables altura h, Apotema a o Apotema de la base ab<br/><br/>';
						    				}
						    			 else 
						    			 	{

						    			 	$OrtH = sqrt(($OrtAB*$OrtAB)+($OrtA*$OrtA)); 		 			    			
											
											$area = (($OrtN*$OrtL)/2)*($OrtA+$OrtAB);
											$volumen = $OrtN*$OrtL*$OrtAB*$OrtH/6;

											echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
											echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
											echo "<br/><strong>Altura H:</strong> &nbsp;". $OrtH. "&nbsp; Unidades <br/><br/>";
											echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Número Lados = &nbsp;". $OrtN."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado L = &nbsp;". $OrtL."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema = &nbsp;".$OrtA."<br/></strong><strong>Apotema Base apb = &nbsp;".$OrtAB."<br/>";
						    				}
					    			}//fin condicional H Vacia
						    		else 
							    	{//inicio condicional para H llena			                                 
										if (empty($OrtAB) && empty($OrtA))
						    				{
						    					echo '<br/><strong>¡ERROR!</strong>...Se necesita mínimo una de las dos apotemas<br/><br/>';
						    				}
					    			 	else 
					    			 	{
					    			 		if (empty($OrtAB))
					    			 		{
						    			 		$OrtAB = sqrt(($OrtA*$OrtA)-($OrtH*$OrtH));	
												$area = (($OrtN*$OrtL)/2)*($OrtA+$OrtAB);
												$volumen = $OrtN*$OrtL*$OrtAB*$OrtH/6;

												echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
												echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
												echo "<br/><strong>Apotema base apb</strong> &nbsp;". $OrtAB. "&nbsp; Unidades <br/><br/>";
												echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Número Lados = &nbsp;". $OrtN."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado L = &nbsp;". $OrtL."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema a = &nbsp;".$OrtA."<br/>";
					    			 		}
					    			 		else 
					    			 		{
						    			 		if (empty($OrtA))
							    			 		{
													$OrtA = sqrt(($OrtH*$OrtH)+($OrtAB*$OrtAB));	
													$area = (($OrtN*$OrtL)/2)*($OrtA+$OrtAB);
													$volumen = $OrtN*$OrtL*$OrtAB*$OrtH/6;

													echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
													echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
													echo "<br/><strong>Apotema a:</strong> &nbsp;". $OrtA. "&nbsp; Unidades <br/><br/>";
													echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Número Lados = &nbsp;". $OrtN."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado L = &nbsp;". $OrtL."<br/></strong><strong>Altura H= &nbsp;".$OrtH."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema de la base apb= &nbsp;".$OrtAB."</strong>";
													}
												else {
													$area = (($OrtN*$OrtL)/2)*($OrtA+$OrtAB);
													$volumen = $OrtN*$OrtL*$OrtAB*$OrtH/6;

													echo " <br/><strong>Área:</strong> &nbsp;". $area. "&nbsp; Unidades Cuadradas <br/>";
													echo "<br/><strong>Volumen:</strong> &nbsp;". $volumen. "&nbsp; Unidades cúbicas <br/><br/>";
													echo "<br/><strong>Apotema a:</strong> &nbsp;". $OrtA. "&nbsp; Unidades <br/><br/>";
													echo " <br/>Valores ingresados &nbsp;&nbsp;<strong><br/>Número Lados = &nbsp;". $OrtN."</strong> &nbsp;&nbsp;&nbsp;<strong>Lado L = &nbsp;". $OrtL."<br/></strong><strong>Altura H= &nbsp;".$OrtH."</strong> &nbsp;&nbsp;&nbsp; <strong>Apotema de la base apb= &nbsp;".$OrtAB."</strong><br/><strong> Apotema de la base apb= ".$OrtAB."</strong><br/>";
												}

											}
				    			 		}//fin condicional a o ab llena				    			 	
						    		} //fin condicional para H llena					    						    
						
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

			<div class="contenedor1"><p><strong>Pirámide Pentagonal Regular (n=5):<br></strong> Necesita la longitud del lado L, se necesitan dos de las tres variables, Altura H, Apotema ap o apotema de la base apb.<br><br>
			<strong>Pirámide Hexagonal Regular (n=6):<br></strong> Necesita la longitud del lado L, se necesitan dos de las tres variables, Altura H, Apotema ap o apotema de la base apb.<br><br>

			<strong>Pirámide Heptagonal Regular (n=7):<br></strong> Necesita la longitud del lado L, se necesitan dos de las tres variables, Altura H, Apotema ap o apotema de la base apb.<br><br>
			<strong>Pirámide Regulares de n lados:<br></strong> Necesita la longitud del lado L, se necesitan dos de las tres variables, Altura H, Apotema ap o apotema de la base apb.<br><br>
			</p>

			</div>
		</div>


  </body>


</html>
