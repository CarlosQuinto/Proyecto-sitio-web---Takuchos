
			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

			<?php if(isset($_SESSION['userId'])){
                
              header("Location: profile.php?login=true");
            } ?>	



<?php 
	if (isset($_POST['ingresar'])) {
		$consulta  = mysqli_query($conexion,"SELECT * FROM tblusuarios WHERE email = '".$_POST['iemail']."'");
		$row = mysqli_fetch_array($consulta);
		if (password_verify($_POST['ipassword'],$row['contrasena'])) {

		$_SESSION['userId'] = $row['id'];
		$_SESSION['userEmail'] = $row['email'];
		$_SESSION['userFullName'] = $row['nombre'] . " " . $row['apellido'];
		$_SESSION['userCellPhone'] = $row['telefono'];

      	echo $_SESSION['userId'];
      	echo $_SESSION['userEmail'];
      	echo $_SESSION['userFullName'];
      	echo $_SESSION['userCellPhone'];
      	header("Location: profile.php?login=true");
		}else{
			echo "Chito puto";
		}
	}
 ?>

<?php 
if (isset($_POST['sent'])) {
	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
if($password == $cpassword){
	registrar($nombre,$apellidos,$email,$password,$telefono,$conexion);
}else{echo "The passwords doesn´t match.";}}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Los Takuchos - Inciar sesion</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style-login.css"/>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

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
					 	  	 				<input id="campo" type="text" name="iemail" />
					 	  	 			</div>
					 	  			</div>         
			                    	<div class="col-lg-12">
			                      		<label id="contrasena" for="password">Contraseña:</label>
			                      	 	<div>
			                      		<input id="campo" type="password" name="ipassword" />
			                      		</div>
			                     	</div>
				                    <div>
				                    	<input id="ingresar" type="submit" name="ingresar" value="Ingresar">
				                        <button id="resetPassword" name="resetPassword" >¿Olvidaste tu contraseña?</button>
				                    </div>
	                    		</form>
	                 		</div>
				  		</div>  

					<div class="col-lg-1">
						
					</div>

						<div class="col-lg-4 borde" id="contenido-registrarse"> 
	                		 <div>
	                 			 <h2 id="contenido-titulos">Iniciar sesión</h2></div>
	                		 <div>
				       		<div>
				       	 		<p id="descripcion-r"><strong>Con tu cuenta podras estar mas al tanto de las promociones de "Los Takuchos"</strong></p>
				       		</div>
	                    	<div id="contenido-formulario-registrarse">
	                     		<form id="form-singup" action="login.php" method="POST">
		                     		<div>
		                      	  		<label id="nombre" for="nombre">Nombre:</label>
		                      	   		<div>
		                      				<input id="campo" type="text" name="nombre" />
		                      	 		</div>
		                         	</div>
		                        	<div>
		                      	  		<label id="apellidos" for="apellidos">Apellidos:</label>
		                      	  		<div>
		                      				<input id="campo" type="text" name="apellidos" />
		                      			</div>
		                         	</div>
		                     	 	<div>
						 	  	 		<label id="telefono" for="telefono">Telefono:</label>
						 	  	 		<div >
						 	  	 			<input id="campo" type="text" name="telefono" />
						 	  			</div>
						 	     	</div>
		                     	 	<div>
						 	  			<label id="correo" for="email">Correo:</label>
						 	  			<div >
						 	  	 			<input id="campo" type="text" name="email" />
						 	  			</div>
						 	     	</div>
		                     		<div>
		                      			<label id="contrasena" for="password">Contraseña:</label>
		                      	 	<div>
		                      			<input id="campo" type="password" name="password" />
		                      		</div>
		                      		</div>
		                      		<div>
		                      			<label id="confircontrasena" for="cpassword">Confirmar contraseña:</label>
		                      	 		<div>
		                      				<input id="campo" type="password" name="cpassword" />
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