			<?php include('../conexiones/conexionLocalhost.php') ?>
			<?php include('../funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>


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
			<link rel="stylesheet" href="../css/style.css"/>
			<link rel="stylesheet" href="../css/stilosperfil.css"/>
			

	</head>
		<body>

			<?php include('../includes/header.php') ?>
               
   <div id="contenido-d-p" class="col-xs-12">
    
               <div id="menu-opciones" class="col-xs-4">
                <h4>OPCIONES</h4> 
            <ul>
              <li><a href="">AGREGAR TARJETA</a></li>
              <li><a href="">CAMBIAR CONTRASEÑA</a></li>
              <li><a href="">TARJEAS</a></li>
              <li><a href="">HISTORIAL DE PEDIDOS</a></li>
          </ul>
               </div>
   	<center>
   		
   		<form id="formulario-p" class="col-xs-5">
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
   				   	<input id="campo" type="text" name="telefono" />
   				   </div>
                </div>

              
   			
   			<div class="col-xs-12">
   				<button id="actualizarp"type="submit" name="actualizarperfil" >Actualizar perfil</button>
   			</div>

   		</form>
   	</center>
     <div class="col-xs-5"></div>

   </div>
   
        

          

			   
			
 <div class="col-xs-12">
 	<?php 
	include('../includes/footer.php');
 ?>
 </div>

 
		</body>
</html>
