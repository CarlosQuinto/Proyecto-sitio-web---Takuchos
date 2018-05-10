

			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

			<?php if(isset($_SESSION['userId'])){
                
              header("Location: profile-editar_perfil.php?login=true");
            } ?>	




<!DOCTYPE html>
<html>
<head>
	<title>Los Takuchos - Inciar sesion</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style-login.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
		<script src="alertifyjs/alertify.js"></script>

</head>
<body>
			<?php include('funciones/expresionesRegulares.php') ?>
<?php 
	if (isset($_POST['ingresar'])) {
		$consulta  = mysqli_query($conexion,"SELECT * FROM tblusuarios WHERE email = '".$_POST['iemail']."'");
		$row = mysqli_fetch_array($consulta);
		if (password_verify($_POST['ipassword'],$row['contrasena'])) {

		$_SESSION['userId'] = $row['id'];
		$_SESSION['userEmail'] = $row['email'];
		$_SESSION['userFullName'] = $row['nombre'] . " " . $row['apellido'];
		$_SESSION['userCellPhone'] = $row['telefono'];

      	header("Location: profile-editar_perfil.php");
		}else{

			 ?>
			 <script type="text/javascript">
			 	alertify.error("Correo ó contraseña incorrectos.");
			 </script>
		<?php
		}
	}
 ?>


<?php 
if (isset($_POST['sent'])) {
	$nombre = mysqli_real_escape_string($conexion,trim($_POST['nombre']));
	$apellidos = mysqli_real_escape_string($conexion,trim($_POST['apellidos']));
	$telefono = mysqli_real_escape_string($conexion,trim($_POST['telefono']));
	$email = mysqli_real_escape_string($conexion,trim($_POST['email']));
	$password = mysqli_real_escape_string($conexion,trim($_POST['password']));
	$cpassword = mysqli_real_escape_string($conexion,trim($_POST['cpassword']));


	$existe = confirmarExistenciaEmail($conexion,$email);
	$validez = is_valid_email($email);

	$bandera=0;

	if (empty($nombre)) {$bandera++;}

	if (empty($apellidos)) {$bandera++;}

	if (empty($telefono)) {$bandera++;}

	if (empty($email)) {$bandera++;}

	if (empty($password)) {$bandera++;}

	if (empty($cpassword)) {$bandera++;}	


						if ($bandera > 0) { ?>
						<script type="text/javascript">
							alertify.error("Favor de no dejar campos vacios.");
						</script>
<?php 
						}else{
							if ($validez) {
								if($password == $cpassword){
									if (!$existe) {
										?>

										<script type="text/javascript">
											alertify.success("Registro exitoso!");
      										
										</script>	
<?php
											registrar($nombre,$apellidos,$email,$password,$telefono,$conexion);
											header("Location: index.php");
									}else{
?>

										<script type="text/javascript">
										alertify.error('Esa direccion ya esta siendo usada. Prueba con otra distinta.');
										</script>

<?php  
									}
										}else{ ?>

												<script type="text/javascript">
													alertify.error("Las contraseñas no coinciden.");
												</script>
										<?php }

							}else{ ?>

									<script type="text/javascript">
										alertify.error("Favor de ingresar una dirección de correo valida.");
									</script>
	<?php 
								 }
								}
							}
							 ?>

			<?php include('includes/header.php') ?>


		<div id="contenido" class="col-lg-12">
				<div id="contenido-main" class="col-lg-12">

					<div class="col-lg-1">
						
					</div>

					<center>
						<div class="col-lg-5 borde iniciarsesion" id="contenido-iniciar-sesion">
	                		 <div>
	                 			 <h2 id="contenido-titulos">Iniciar sesión</h2></div>
	                		 <div>
	                 			 <strong><p id="descripcion-i-s">Usa tu correo y contraseña para iniciar sesión</p></strong></div>
	                 		<div id="contenido-formularios">
	                 			<form id="form-login" action="login.php" method="POST">
					 	  			<div>
					 	  	 			<label id="correo" for="email">Correo:</label>
					 	  				<div class="col-lg-12">
					 	  	 				<input id="campo" type="email" name="iemail" placeholder="example@example.com" minlength="7" maxlength="50"/>
					 	  	 			</div>
					 	  			</div>         
			                    	<div class="col-lg-12">
			                      		<label id="contrasena" for="password">Contraseña:</label>
			                      	 	<div>
			                      		<input id="campo" type="password" name="ipassword" minlength="8"/>
			                      		</div>
			                     	</div>
				                    <div>
				                    	<input id="ingresar" type="submit" name="ingresar" value="Ingresar">
				                        
				                    </div>
	                    		</form>
	                 		</div>
				  		</div>  

					<div class="col-lg-1">
						
					</div>

						<div class="col-lg-4 borde" id="contenido-registrarse"> 
	                		 <div>
	                 			 <h2 id="contenido-titulos">Registrarse</h2></div>
	                		 <div>
				       		<div>
				       	 		<p id="descripcion-r"><strong>Con tu cuenta podras estar mas al tanto de las promociones de "Los Takuchos"</strong></p>
				       		</div>
	                    	<div id="contenido-formulario-registrarse">
	                     		<form id="form-singup" action="login.php" method="POST">
		                     		<div>
		                      	  		<label id="nombre" for="nombre">Nombre:</label>
		                      	   		<div>
		                      				<input id="campo" type="text" name="nombre" maxlength="40"/>
		                      	 		</div>
		                         	</div>
		                        	<div>
		                      	  		<label id="apellidos" for="apellidos">Apellidos:</label>
		                      	  		<div>
		                      				<input id="campo" type="text" name="apellidos" maxlength="40"  />
		                      			</div>
		                         	</div>
		                     	 	<div>
						 	  	 		<label id="telefono" for="telefono">Telefono:</label>
						 	  	 		<div >
						 	  	 			<input id="campo" type="text" name="telefono" placeholder="(###)###-####" maxlength="13" minlength="13"/>
						 	  			</div>
						 	     	</div>
		                     	 	<div>
						 	  			<label id="correo" for="email">Correo:</label>
						 	  			<div >
						 	  	 			<input id="campo" type="email" name="email" placeholder="example@example.com" maxlength="50" minlength="7"/>
						 	  			</div>
						 	     	</div>
		                     		<div>
		                      			<label id="contrasena" for="password">Contraseña:</label>
		                      	 	<div>
		                      			<input id="campo" type="password" name="password" minlength="8" />
		                      		</div>
		                      		</div>
		                      		<div>
		                      			<label id="confircontrasena" for="cpassword">Confirmar contraseña:</label>
		                      	 		<div>
		                      				<input id="campo" type="password" name="cpassword" minlength="8"/>
		                      	 		</div>
		                     		</div>
		                     		<div>
		                     			<input id="registrarse" type="submit" value="Registrar" name="sent">
		                   			</div>
	                     		</form>
	                     	</div>
				    	</div>
					</center>
				</div>
			</div>


<div class="col-lg-12 footerE">
		<?php include('includes/footer.php') ?>
</div>

</body>
</html>



					
