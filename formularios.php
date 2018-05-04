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




<!DOCTYPE html>
<html>
	<head>
		<title></title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/stilos.css"/>
			<link rel="stylesheet" href="css/style-index.css"/>

	</head>
		<body>

			<?php include('includes/header.php') ?>

			<div id="contenido" class="col-xs-12">
				<div id="contenido-titulos">
					<center>
			       		<h2 class="col-xs-6">Iniciar sesión</h2>
			       		<h2 class="col-xs-6">Crea tu cuenta</h2>
			    	</center>
				</div>
				<div id="contenido-main" class="col-xs-12">
					<center>
						<div class="col-xs-6" id="contenido-iniciar-sesion">
	                		 <div>
	                 			 <p id="descripcion-i-s">Usa tu correo y contraseña para iniciar sesión</p>
	                		 </div>
	                 		<div id="contenido-formularios">
	                 			<form id="form-login" action="formularios.php" method="POST">
					 	  			<div>
					 	  	 			<label id="correo" for="email">Correo:</label>
					 	  				<div class="col-xs-12">
					 	  	 				<input id="campo" type="text" name="iemail" />
					 	  	 			</div>
					 	  			</div>         
			                    	<div>
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

						<div class="col-xs-6" id="contenido-registrarse"> 
				       		<div>
				       	 		<p id="descripcion-r"><strong>Con tu cuenta podras estar mas al tanto de las promociones de "Los Takuchos"</strong></p>
				       		</div>
	                    	<div id="contenido-formulario-registrarse">
	                     		<form id="form-singup" action="formularios.php" method="POST">
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
						 	  	 		<div class="col-xs-12">
						 	  	 			<input id="campo" type="text" name="telefono" />
						 	  			</div>
						 	     	</div>
		                     	 	<div>
						 	  			<label id="correo" for="email">Correo:</label>
						 	  			<div class="col-xs-12">
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

			<?php include('includes/footer.php') ?>

		</body>
</html>

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



