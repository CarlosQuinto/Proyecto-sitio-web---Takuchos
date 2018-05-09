			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");

            } ?>
             
            <!-- cerrar la sesion -->
            <?php 
            if (isset($_POST['sentclose'])) {
	            
             session_destroy();
             }

            ?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Perfil/Cambiar_contraseña - 
			<?php 
			echo $_SESSION['userFullName'];
			 ?>

		</title>
		     <link rel="stylesheet" href="css/stilosperfil.css"/>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css"/>
			<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
		    <link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
		    <script src="alertifyjs/alertify.js"></script>
			
			

	</head>
		<body>

            <?php 
            if (isset($_POST['sent'])) {
	            $contra = $_POST['contra'];
	            $idUsuario = $_SESSION['userId'];
               if($_POST['contra'] != $_POST['contra2']) {
                   ?>
			     <script type="text/javascript">
			 	alertify.error("Las contraseñas no coinciden");
			      </script>
		            <?php
              }else{
              	 cambiarContrasena($idUsuario,$contra,$conexion);
              }
             }
            ?>
			<?php include('includes/header.php') ?>

            

			<div  id="contenido-e-p" class="col-xs-12">
				<div  class="col-xs-4">
					<h4>OPCIONES</h4>
					
				    <ul style="list-style: none;">
						<li><a href="profile-editar_perfil.php">EDITAR PERFIL</a></li>
					    <li><a href="profile-agregar_tarjeta.php">AGREGAR TARJETA</a></li>
					    <li><a href="">TARJEAS</a></li>
					    <li><a href="">HISTORIAL DE PEDIDOS</a></li>
					
					</ul>
					<form id="form-cerrar-sesion" action="profile-cambiar_contraseña.php" method="POST">
						<input id="cerrarsesion" type="submit" value="CERRAR SESION" name="sentclose">
					</form>
			  </div>

				<div class="col-xs-5">
					<center><h3>CAMBIAR CONTRASEÑA</h3>
					<div id="formulario-c-c">
						<form id="form-cambiar-contraseña" action="profile-cambiar_contraseña.php" method="POST">
					      
				 	<div>

				 	  	 <label id="nueva-contrasena" for="contra">Nueva contraseña:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="password" name="contra" />

				 	  	 </div>
                         
				 	</div>
				 	<div>

				 	  	 <label id="confirmar" for="contra2">Confirmar contraseña:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="password" name="contra2" />

				 	  	 </div>
                         
				 	</div>
				 	
				 		<div>
                      	
                        <input id="actualizarc" type="submit" value="Actualizar Contraseña" name="sent">
                        </div>
   	
					   </form>
					</div>
					</center>
				</div>

				<div class="col-xs-3">
					
				</div>
				
 
			</div>

			 
			
 <div class="col-xs-12">
 	<?php 
	include('includes/footer.php');
 ?>
 </div>

 
		</body>
</html>

