<html>

	<head>
	
	
	
	</head>

	<body>
	
		<form method="POST" action="registro.php">
		
			<input type="text" name="dni" placeholder="Dni">
			<input type="submit" name="boton" value="Enviar">
		
		</form>

		<?php
		
		include("conexion.php");
		
		if(isset($_POST["dni"])){//comprobamos que el dni del alumno esté registrado
		
		
		$dni = $_POST["dni"];
		$sql_consul = "SELECT * FROM alumnos WHERE dni_alumno = '$dni'";
		$hora = date("H:i:s");
		$dia = date("y-m-d");  
		
		$ej = $conexion->query($sql_consul);
	
			if($fila=$ej->fetch_array()){//Si hay registro haremos...
				
				$presente = $fila["presente_alu"];
				$cod_alu = $fila["cod_alumno"];
				$nom_alu = $fila["nom_alumno"];
				
				if($presente==0){//Comprobamos si el alumno ya ha entrado
					
					
					$sql_insert_reg="INSERT INTO registro_entrada (cod_alumno,hora_entrada,dia_entrada) VALUES ('$cod_alu','$hora','$dia')";
					if($conexion->query($sql_insert_reg)){
						
						$sql_presente="UPDATE alumnos SET presente_alu = 1 WHERE  cod_alumno = '$cod_alu'";
						
						if($conexion->query($sql_presente)){
						echo"<script language ='javascript'>
						alert('Entrada registrada de $nom_alu')
						window.location.href='registro.php'	
						</script>";
						}else{
							
							Echo"Error";
							
						}
					}else{
						
						echo"<script language ='javascript'>
						alert('Entrada erronea')
						window.location.href='registro.php'	
						</script>";
						
					}
					
				}else{//Si el alumno esta ya presente haremos...
					
					$sql_insert_reg="INSERT INTO registro_salida (cod_alumno,hora_salida,dia_salida) VALUES ('$cod_alu','$hora','$dia')";
					if($conexion->query($sql_insert_reg)){
						
						$sql_presente="UPDATE alumnos SET presente_alu = 0 WHERE  cod_alumno = '$cod_alu'";
						if($conexion->query($sql_presente)){
						echo"<script language ='javascript'>
						alert('Salida registrada de $nom_alu')
						window.location.href='registro.php'	
						</script>";
						}else{
							
							echo"Error";
							
						}
					}else{
						
						echo"<script language ='javascript'>
						alert('Salida erronea')
						window.location.href='registro.php'	
						</script>";
						
					}
					
				}
				
				
				
				
				
				
			}else{//Si no hay dni coincidente
				
				echo"<script language ='javascript'>
					alert('Usuario no registrado')
					window.location.href='registro.php'	
					</script>";
				
				
				
			}

		}
		$conexion->close();
		
		?>	
	
	
	</body>

</html>





