
<?php 

$_POST['campoNombre'];
$_POST['campoApellido'];
$_POST['campoDireccion'];
$_POST['campoTelefono'];
$_POST['campoReferencias'];



 ?>




<!DOCTYPE html>
<html lang="es">
<head>

	<title>Los Takuchos - Confirmar orden</title>
         <meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/stilosperfil.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		


</head>
<body>
	<?php include('includes/header.php') ?>

    <div id="contenido-c-o" >
		<div class="col-lg-3"></div>
      		<div id="formulario-c-d" class="col-lg-6">
      			<h3 class="col-lg-12"><strong>Confirmar orden</strong></h3>
      			 <form action="" method="POST" class="col-lg-12">
      			 	 <div class="col-lg-6">
      			 	 	 <h4 class="col-lg-12">Confirma tus datos</h4>

				 	  	 <div class="col-lg-12">
				 	  	 	<label><input id="campo" type="text" name="campoNombre" placeholder="Nombre" /></label>
				 	  	 </div>                       
				 	
				 		<div class="col-lg-12">
					 	  	<label><input id="campo" type="texto" name="campoApellido" placeholder="Apellido"/></label>
				 	  	 </div>
                         
						 <div class="col-lg-12">
					 	  	 <label><input id="campo" type="tel" name="campoTelefono" placeholder="Telefono" /></label>
				 	  	 </div>
				 	</div>


				 	<div id="inf-l"  class="col-lg-6">
				 		 <h4 class="col-lg-12">Tu ubicacion</h4>

				 		 	<div class="col-lg-12">
				 	  	        <label><input id="campo" type="text" name="campoDireccion" placeholder="Direccion"/></label>				 	  	 	    
				 	  	    </div>

				 		    <div class="col-lg-12">
				 	  	        <label><input id="campo" type="text" name="campoReferencias" placeholder="Referencias"/></label>   
				 	  	    </div>


				 	<div id="contenido-c-mp" class="col-lg-12" style="margin-top: 10px;">

      		        	<h4 >Tipo de pago</h4>
      		        	<div>
      		            <label class="col-lg-12"><input type="radio" name="metodopago" value="efectivo" checked>Efectivo
      		            </label> 
                        <label class="col-lg-12">
                        <input type="radio" name="metodopago" value="tarjeta">
                        Tarjeta	
                        </label>
      		        	</div>
      		        
      	            </div>
      		        <div class="col-lg-12">
                      <button id="actualizarc" type="submit" name="confirmar" >Confirmar</button>
                    </div>
      		        </div>

      			</form>
      		</div>
        <div class="col-lg-3"></div>
    </div>
      

<div class="col-lg-2">	</div>
 
<div class="col-lg-12" style="margin-top: 25px;">
		<?php include('includes/footer.php') ?>
</div>




</body>
</html>



