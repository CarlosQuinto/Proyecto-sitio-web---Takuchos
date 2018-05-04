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
				
				<div id="contenido-main" class="col-xs-12">
					<center>
						<!-- Comienza el panel lateral-->
						<div class="col-xs-4">
							<img src="img/Captura.PNG">
							<?php include('includes/settings.php') ?>
						</div>
						<!-- Comienza el panel de edicion-->
						<div class="col-xs-8">
							<div id="contenido-formularios">

	                 			<form id="form-login" action="formularios.php" method="POST">
	                 				<!-- divide el panel de edicion en 2 secciones.-->
	                 				
	                 				<div class="col-xs-4">
	                 					<div>
					 	  	 				<label id="nombre" for="nombre">Nombre:</label>
					 	  						<div class="col-xs-12">
					 	  	 						<input id="campo" type="text" placeholder="Nombre" name="nombre"  autofocus>
					 	  	 					</div>
					 	  				</div> 

					 	  				<div>
						 	  	 			<label id="telefono" for="telefono">Telefono:</label>
						 	  	 			<div class="col-xs-12">
						 	  	 				<input id="campo" type="text" placeholder="Telefono" name="telefono" />
						 	  				</div>
						 	     		</div>

						 	     		<div>
			                      			<label id="contrasena" for="password">Contraseña:</label>
			                      	 		<div class="col-xs-12">
			                      			<input id="campo" type="password" placeholder="Contraseña" name="password" required="" />
			                      			</div>
			                     		</div>

			                     		<div>
				                    		<input id="ingresar" type="submit" name="ingresar" value="Actualizar">
				                    	</div>

	                 				</div>

	                 				<div class="col-xs-4">
	                 					<div>
			                      			<label id="apellidos" for="apellidos">Apellidos:</label>
			                      	 		<div class="col-xs-12">
			                      				<input id="campo" type="text" placeholder="Apellidos" name="apellidos"/>
			                      			</div>
			                     		</div>

			                     		<div>
						 	  				<label id="correo" for="email">Correo:</label>
						 	  				<div class="col-xs-12">
						 	  	 				<input id="campo" type="text" placeholder="Correo" name="email" />
						 	  				</div>
						 	     		</div>

	                 				</div>
										
	                    		</form>

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



