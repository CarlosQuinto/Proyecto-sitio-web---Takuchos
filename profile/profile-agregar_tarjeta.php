			<?php include('../conexiones/conexionLocalhost.php') ?>
			<?php include('../funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>


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
			<link rel="stylesheet" href="../css/style.css"/>
			<link rel="stylesheet" href="../css/stilosperfil.css"/>
			

	</head>
		<body>

			<?php include('../includes/header.php') ?>
                       <div id="contenido-a-t" class="col-xs-12" >

               <div id="menu-opciones" class="col-xs-4">
               	<h4>OPCIONES</h4>
					
				    <ul >
						<li><a href="">EDITAR PERFIL</a></li>
					    <li><a href="">AGREGAR TARJETA</a></li>
					    <li><a href="">CAMBIAR CONTRASEÑA</a></li>
					    <li><a href="">TARJEAS</a></li>
					    <li><a href="">HISTORIAL DE PEDIDOS</a></li>
					
					</ul>
               </div>
               <center>
           	   <div id="formulario-p" class="col-xs-5" >
    			       <div id="titulo-tarjeta" class="col-xs-12">
          		       <h3>AGREGAR TARJETA</h2>
          	            </div>
    			     <form>

    			    <div>

				 	  	 <label id="numtarjeta" for="numerotarjeta">Numero de Tarjeta:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="numero" />

				 	  	 </div>
                         
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

				 	  	 <label id="expiracion" for="fechaexpiracion">Fecha de expiracion:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="date" name="fecha" />

				 	  	 </div>
                         
				 	</div>
				 	<div>

				 	  	 <label id="codigo" for="codigoseguridad">Código de seguridad:</label>

				 	  	 <div>

				 	  	 	<input id="campo" type="text" name="codigo" />

				 	  	 </div>
                         
				 	</div>
				 	
				 		<div>
                      	<button id="guardar" type="submit" name="guardar-tarjeta" >Guardar</button>
                        </div>
           
    			</form>
         
    		</div>

            <div class="col-xs-3">
            	
            </div>
    		
    	</div>
       
    </center>

			   
			
 <div class="col-xs-12">
 	<?php 
	include('../includes/footer.php');
 ?>
 </div>

 
		</body>
</html>



