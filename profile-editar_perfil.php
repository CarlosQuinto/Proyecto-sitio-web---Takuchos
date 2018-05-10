			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

           <?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");

            } ?>  

            <!-- editar informacion -->
            <?php 
               if (isset($_POST['sent'])) {
                  $nombre = $_POST['nombre'];
                  $apellido = $_POST['apellido'];
                 $telefono= $_POST['telefono'];
  
                  $idUsuario = $_SESSION['userId'];
    
                  editarInformacion($idUsuario,$nombre,$apellido,$telefono,$conexion);
                  session_destroy();
               }
            ?>
 <!-- cerrar la sesion -->
            <?php 
            if (isset($_POST['sentclose'])) {
              
             session_destroy();
             }

            ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>
			Perfil/Editar - perfil - 
			<?php 
			echo $_SESSION['userFullName'];
			 ?>

		</title>
		    <meta charset="UTF-8">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css"/>
			<link rel="stylesheet" href="css/stilosperfil.css"/>
			

	</head>
		<body>

			<?php include('includes/header.php') ?>
               
   <div id="contenido-d-p" class="col-xs-12">
    
               <div id="menu-opciones" class="col-xs-4">
                <h4>OPCIONES</h4> 
            <ul style="list-style: none;">
              <li><a href="profile-agregar_tarjeta.php">AGREGAR TARJETA</a></li>
              <li><a href="profile-cambiar_contraseña.php">CAMBIAR CONTRASEÑA</a></li>
                  <li><a href="profile-mostrar_tarjetas.php">TARJETAS</a></li>
                  <li><a href="profile-mostrar-pedidos.php">HISTORIAL DE PEDIDOS</a></li>

          </ul>
          <form id="form-cerrar-sesion" method="POST">
            <input id="cerrarsesion" type="submit" value="CERRAR SESION" name="sentclose">
          </form>
               </div>
   	<center>
   		
   		<form id="formulario-p" class="col-xs-5"  action="profile-editar_perfil.php" method="POST">
   			  <div class="col-xs-12">
        <h3>EDITAR PERFIL</h3>
      </div>
   			
   				<div>
   				  <label id="nombre" for="nombre">Nombre:</label>
   				   <div>
   				   	<input id="campo" type="text" name="nombre" />
   				   </div>
                </div>
       
   				<div>
   				  <label id="apellido" for="apellido">Apellido:</label>
   				   <div>
   				   	<input id="campo" type="text" name="apellido" />
   				   </div>
                </div>

                 <div>
   				  <label id="telefono" for="telefono">Telefono:</label>
   				   <div>
   				   	<input id="campo" type="text" name="telefono" placeholder="(###)###-####" />
   				   </div>
                </div>

              
   			
   			<div class="col-xs-12">
   				<input id="actualizarp" type="submit" value="Actualizar perfil" name="sent">
   			</div>

   		</form>
   	</center>
     <div class="col-xs-5"></div>

   </div>
   
        

          

			   
			
 <div class="col-xs-12">
 	<?php 
	include('includes/footer.php');
 ?>
 </div>

 
		</body>
</html>
