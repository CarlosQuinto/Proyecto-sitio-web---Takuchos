			<?php include('../conexiones/conexionLocalhost.php') ?>
			<?php include('../funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>


<!DOCTYPE html>
<html>
	<head>
		<title>
			Perfil/password - 
			<?php 
			echo $_SESSION['userFullName'];
			 ?>

		</title>
		     <link rel="stylesheet" href="../css/stilosperfil.css"/>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="../css/style.css"/>
			
			

	</head>
		<body>

			<?php include('../includes/header.php') ?>

			<div  id="contenido-e-p" class="col-xs-12">
				<div  class="col-xs-4">
					<h4>OPCIONES</h4>
					
				    <ul >
						<li><a href="">EDITAR PERFIL</a></li>
					    <li><a href="">AGREGAR TARJETA</a></li>
					    <li><a href="">TARJEAS</a></li>
					    <li><a href="">HISTORIAL DE PEDIDOS</a></li>
					
					</ul>
					
			  </div>
				<div class="col-xs-5">
					<center><h3>CAMBIAR CONTRASEÑA</h3>
					<div id="formulario-c-c">
						<form >
					      <div >

				 	  	 <label id="actual" for="apellido">Contraseña actual:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="password" name="actual" />

				 	  	 </div>
                         
				 	</div>
				 	<div>

				 	  	 <label id="nueva-contrasena" for="fechaexpiracion">Nueva contraseña:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="password" name="nueva" />

				 	  	 </div>
                         
				 	</div>
				 	<div>

				 	  	 <label id="confirmar" for="apellido">Confirmar contraseña:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="password" name="confirmar" />

				 	  	 </div>
                         
				 	</div>
				 	
				 		<div>
                      	<button id="actualizarc" type="submit" name="actualizarcontraseña" >Actualizar Contraseña</button>
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
	include('../includes/footer.php');
 ?>
 </div>

 
		</body>
</html>

