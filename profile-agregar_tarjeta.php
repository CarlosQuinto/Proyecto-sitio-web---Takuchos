			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");
            } ?>	
 <!-- enviar formulario -->
<?php 
if (isset($_POST['sent'])) {


	$numerotarjeta = $_POST['numero'];
	$nombreCompleto = $_POST['nombre'];
	$fechaexpiracion= $_POST['fecha'];
	$codigo = $_POST['codigo'];
	$idUsuario = $_SESSION['userId'];
    
   	

   	if (validarTarjeta($numerotarjeta) == true) {
   		registrarTarjeta($idUsuario,$numerotarjeta,$nombreCompleto,$fechaexpiracion,$codigo,$conexion);
		header("Location: profile-agregar_tarjeta.php"); //tarjeta valida
		
   	}else{
   		header("Location: profile-editar_perfil.php");//deve mostrar mensaje de error
   	}
	
	
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
			Perfil/Agregar - tarjeta - 
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
                       <div id="contenido-a-t" class="col-xs-12" >

               <div id="menu-opciones" class="col-xs-4">
               	<h4>OPCIONES</h4>
					
				    <ul style="list-style: none;">
						<li><a href="profile-editar_perfil.php">EDITAR PERFIL</a></li>
					    <li><a href="profile-cambiar_contraseña.php">CAMBIAR CONTRASEÑA</a></li>
					    <li><a href="">TARJEAS</a></li>
					    <li><a href="">HISTORIAL DE PEDIDOS</a></li>
					 
					</ul>
					<form id="form-cerrar-sesion" action="profile-agregar_tarjeta.php" method="POST">
						<input id="cerrarsesion" type="submit" value="CERRAR SESION" name="sentclose">
					</form>
               </div>
               <center>
           	   <div id="formulario-p" class="col-xs-5" >
    			       <div id="titulo-tarjeta" class="col-xs-12">
          		       <h3>AGREGAR TARJETA</h2>
          	            </div>
    			      <form id="form-agregar-tarjeta" action="profile-agregar_tarjeta.php" method="POST">

    			    <div>

				 	  	 <label id="numtarjeta" for="numerotarjeta">Número de Tarjeta:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="numero" />

				 	  	 </div>
                         
				 	</div>
				 	 <div>

				 	  	 <label id="nombre" for="nombre">Nombre Titular</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="nombre" />

				 	  	 </div>
                         
				 	</div>

				 	<div>

				 	  	 <label id="expiracion" for="fechaexpiracion">Fecha de expiracion:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="fecha" placeholder="Mes/Año" />

				 	  	 </div>
                         
				 	</div>
				 	<div>

				 	  	 <label id="codigo" for="codigoseguridad">Código de seguridad:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="codigo" />

				 	  	 </div>
                         
				 	</div>
				 	
				 		<div>
                      		<input id="guardar" type="submit" value="Guardar" name="sent">
                        </div>
           
    			</form>
         
    		</div>

            <div class="col-xs-3">
            	
            </div>
    		
    	</div>
       
    </center>

			   
			
 <div class="col-xs-12">
 	<?php 
	include('includes/footer.php');
 ?>
 </div>

 
		</body>
</html>